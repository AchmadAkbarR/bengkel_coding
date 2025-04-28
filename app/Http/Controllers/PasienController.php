<?php

namespace App\Http\Controllers;

use App\Models\DaftarPeriksa;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $dokters = User::where('role', 'dokter')->get();
        return view('pasien.index', compact('dokters'));
    }

    public function dashboardPasien()
    {
        return view('pasien.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required|exists:users,id',
            'keluhan' => 'required|string|max:1000',
        ]);

        DaftarPeriksa::create([
            'user_id' => auth()->id(),
            'dokter_id' => $request->dokter_id,
            'keluhan' => $request->keluhan,
            'tanggal_periksa' => now(), 
            'status' => 'Menunggu',
        ]);
    
        return redirect()->route('pasien.index')->with('success', 'Berhasil daftar periksa.');
    }
}
