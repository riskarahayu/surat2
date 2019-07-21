<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMahasiswa;

class UserMahasiswaController extends Controller
{
    public function index() {
    	$mahasiswa = UserMahasiswa::all();
    	return view('admin.mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
}
