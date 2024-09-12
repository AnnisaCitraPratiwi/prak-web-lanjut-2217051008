<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = '',$kelas = '',$npm=''){

        $data = [
            // 'nama' => 'Annisa',
            // 'kelas' => 'A',
            // 'npm' => '2217051008'
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }
}

//http://127.0.0.1:8000/profile/Citra/A/2217051008