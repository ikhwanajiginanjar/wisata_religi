<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Profil;
use App\Models\Layanan;
use App\Models\Galeri;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda() {
        return view('beranda');
    }

    public function profil() {
        $profil = Profil::all();
        return view('profil', compact('profil'));
    }

    public function layanan() {
        $layanan = Layanan::all();
        return view('layanan', compact('layanan'));
    }

    public function galeri() {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }

    public function kontak() {
        $kontaks = Kontak::latest()->paginate(10);
    return view('kontak.index', compact('kontaks'));
    }
}

