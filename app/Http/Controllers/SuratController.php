<?php

namespace App\Http\Controllers;

use App\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function index() {
    	$nim = Auth::guard('mahasiswa')->user()->nim;
    	$surat = Surat::with('surat_penelitian', 'jenis_surat', 'status', 'user_mahasiswa')->where('nim', $nim)->get();

    	return view('surat.index', ['surat' => $surat]);
    }
}
