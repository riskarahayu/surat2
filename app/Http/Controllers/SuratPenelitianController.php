<?php

namespace App\Http\Controllers;

use Session;
use App\Surat;
use App\SuratPenelitian;
use App\SuratPenelitianData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratPenelitianController extends Controller
{
    public function create() {
        $letterNumber = $this->generateLetterNumber();

    	return view('surat.penelitian.create');
    }

    public function generateLetterNumber() {
        $last_letter = Surat::latest()->first();
        $last_id = $last_letter->id_surat;

        $date = $last_letter->created_at->format('Y-m-d');
        $today = date('Y-m-d');

        if ($date == $today) {
            
            Session::forget('letter_number');
            Session::put('letter_number', $last_id);
        } else {
            Session::forget('letter_number');
            Session::put('letter_number', $last_id++);
        }

        $alpha1 = 'PL7';
        $alpha2 = 'TIK';

        $year = date('Y');

        $number_raw = Session::get('letter_number');

        switch (strlen($number_raw)) {
            case 1:
                $number = '00'.$number_raw;
                break;
            case 2:
                $number = '0'.$number_raw;
                break;
            case 3: 
                $number = $number_raw;
                break;
        }

        return $number.'/'.$alpha1.'/'.$alpha2.'/'.$year;
    }

    public function store(Request $request) {
    	$request->validate([
    		'tujuan_surat' => 'required',
    		'nama_perusahaan' => 'required',
    		'alamat_perusahaan' => 'required',
    		'data' => 'required'
    	]);

    	$surat = Surat::create([
    		'no_surat' => $this->generateLetterNumber(),
    		'perihal' => '',
    		'lampiran' => '',
    		'id_jenis_surat' => 1,
    		'nim' => Auth::guard('mahasiswa')->user()->nim
    	]);

    	$surat_penelitian = SuratPenelitian::create([
    		'tujuan_surat' => $request->tujuan_surat,
    		'nama_perusahaan' => $request->nama_perusahaan,
    		'alamat_perusahaan' => $request->alamat_perusahaan,
    		'id_surat' => $surat->id_surat
    	]);

    	$keperluan_data = explode(',', $request->data);

    	foreach($keperluan_data as $k) {
    		SuratPenelitianData::create([
    			'nama' => $k,
    			'id_surat_penelitian' => $surat_penelitian->id_surat_penelitian
    		]);
    	}

    	return redirect('/surat');
    }
}
