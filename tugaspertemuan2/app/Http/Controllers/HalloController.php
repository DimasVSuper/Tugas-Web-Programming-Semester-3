<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function beranda(){
        return view('beranda');
    }

    public function biodata(){
        return view('biodata', [
            'Nama' => 'Dimas Bayu Nugroho',
            'Kelas' => '19.3A.25',
            'NIM' => '19240384',
            'Jurusan' => 'Sistem Informasi',
            'Umur' => '19 Tahun',
            'Hobi' => ['Membaca Buku', 'Membaca Artikel', 'Meditasi', 'Diskusi'],
            'Kelamin' => 'Laki-Laki'
        ]);
    }

    public function halo(){
        return view('halo');
    }

    public function profile(){
        return view('profile');
    }


}
