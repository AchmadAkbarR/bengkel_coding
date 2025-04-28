<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterDashboardController extends Controller
{
    public function index()
    {
        return view('dokter.index');
    }
    public function test()
    {
        return view('dokter.test');
    }
}
