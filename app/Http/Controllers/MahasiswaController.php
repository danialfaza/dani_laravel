<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswaid;

class MahasiswaController extends Controller
{
    public function mahasiswa() {
    	$halaman = 'mahasiswaid';
    	$mahasiswa_list = mahasiswaid::all();
    	return view('welcome', compact('halaman', 'mahasiswa_list'));
    }
}
