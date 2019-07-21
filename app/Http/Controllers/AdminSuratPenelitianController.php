<?php

namespace App\Http\Controllers;

use App\Surat;
use App\Status;
use App\JenisSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class AdminSuratPenelitianController extends Controller
{
    public function single($id) {
    	$surat = Surat::with('surat_penelitian.data')->where('id_surat', $id)->first();
    	$status = Status::all();
        $data = ['title' => 'Welcome to belajarphp.net'];

    	return view('admin.surat.penelitian.single', ['surat' => $surat, 'status' => $status ]);
    }

    public function edit($id) {
    	$surat = Surat::with('surat_penelitian.data', 'status')->where('id_surat', $id)->first();
    	$status = Status::all();
        $jenis_surat = JenisSurat::all();
    	return view('admin.surat.penelitian.edit', ['surat' => $surat, 'status' => $status, 'jenis_surat' => $jenis_surat ]);
    }

    public function update($id, Request $request) {
        $surat = Surat::find($id);
        // dd($request);
        $surat->no_surat = $request->no_surat;
        $surat->id_status =$request->id_status;
        $surat->perihal = $request->perihal;
        $surat->lampiran = $request->lampiran;
        $surat->id_jenis_surat = $request->id_jenis_surat;
        $surat_penelitian = $surat->surat_penelitian;
        $surat_penelitian->tujuan_surat = $request->tujuan_surat;
        $surat_penelitian->nama_perusahaan = $request->nama_perusahaan;
        $surat_penelitian->alamat_perusahaan = $request->alamat_perusahaan;
        $surat->save();
        $surat_penelitian->save();
        return redirect('/admin/surat/penelitian/'.$id);
    }

    public function generatePDF($id)
 
    {
        $surat = Surat::find($id);
        $data = [
            'tujuan' => $surat->surat_penelitian->tujuan_surat,
            'nama_perusahaan' => $surat->surat_penelitian->nama_perusahaan,
            'alamat_perusahaan' => $surat->surat_penelitian->alamat_perusahaan,
            'mahasiswa' => $surat->user_mahasiswa->mahasiswa,
            'data' => $surat->surat_penelitian->data,
            'surat' => $surat
        ];
 
        $pdf = PDF::loadView('admin.surat.penelitian.pdf', $data);
        // return $pdf->download('laporan-pdf.pdf');
        return $pdf->stream();
    }
}
