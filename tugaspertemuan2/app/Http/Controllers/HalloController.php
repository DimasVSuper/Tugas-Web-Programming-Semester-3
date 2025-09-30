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
            'TempatLahir' => 'Jakarta, 20 Mei 2006',
            'Alamat' => 'Jakarta, DKI Jakarta',
            'Email' => 'dimasbayunugroho2006@gmail.com',
            'NoHP' => '08xxxxxxxxxx',
            'Hobi' => ['Membaca Buku', 'Membaca Artikel', 'Meditasi', 'Diskusi Filosofi'],
            'Kelamin' => 'Laki-Laki',
            'Agama' => 'Islam',
            'Status' => 'Belum Menikah',
            'Motto' => 'Let it be',
            'CitaCita' => 'Menjadi developer yang bermanfaat dan berkontribusi di bidang teknologi pendidikan'
        ]);
    }

    public function halo(){
        return view('halo');
    }

    public function profile(){
        return view('profile');
    }


}
