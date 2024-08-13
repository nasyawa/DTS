<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    //
    public function daftarPengajar()
    {
        return 'Form pendaftaran pengajar mahasiswa';
    }
    public function tabelPengajar()
    {
        return 'Tabel data pengajar mahasiswa';
    }
    public function blogPengajar()
    {
        return 'Halaman blog mahasiswa';
    }
}
