<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AndiController extends Controller
{
    // Fungsi untuk menampilkan halaman utama landing page andi
    public function index()
    {
        return view('index'); // Merujuk ke file index.blade.php
    }
}