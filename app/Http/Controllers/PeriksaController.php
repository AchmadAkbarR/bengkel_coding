<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function riwayat()
    {
        return view('dokter.riwayat'); // Ganti sesuai view kamu
    }
}
