<?php

namespace App\Http\Controllers;

use App\Surat;
use App\Status;
use Illuminate\Http\Request;

class OperatorSuratController extends Controller
{
    public function index() {
    	$surat = Surat::whereIn('id_status', [2, 4])->get();

    	return view('operator.surat.index', ['surat' => $surat]);
    }

    public function edit($id) {
    	$surat = Surat::find($id);
    	$status = Status::whereIn('id_status', [2, 4])->get();
    	return view('operator.surat.edit', ['surat' => $surat, 'status' => $status]);
    }

    public function update($id, Request $request) {
    	$surat = Surat::find($id);
    	$surat->id_status = $request->id_status;
    	$surat->save();
    	return redirect()->back();
    }
}
