<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Iqbal',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '090909099',
                'role' => 'dokter',
                'email' => 'iqbal@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'neena',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '908787878',
                'role' => 'dokter',
                'email' => 'neena@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Budi',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '9087822278',
                'role' => 'pasien',
                'email' => 'budi@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Doremi',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '90878212278',
                'role' => 'pasien',
                'email' => 'doremi@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Fasola',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '03878212278',
                'role' => 'pasien',
                'email' => 'fasola@gmail.com',
                'password' => 'password'
            ]
        ];
    
        foreach($data as $d){
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role']
            ]);
        }
    }
    
}
