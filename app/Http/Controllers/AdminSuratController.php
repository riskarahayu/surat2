<?php

namespace App\Http\Controllers;

use App\Surat;
use Illuminate\Http\Request;

class AdminSuratController extends Controller
{
    public function index() {
    	$surat = Surat::all();
    	return view('admin.surat.index', ['surat' => $surat]);
    }
}
