<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\Agenda;
use App\Models\Prestasi;

class FrontendController extends Controller
{
    // ===============================
    // 🏠 Halaman Beranda
    // ===============================
    public function index()
    {
        $galeri = Galeri::latest()->take(9)->get();
        $agenda = Agenda::orderBy('tanggal', 'desc')->take(5)->get();
        $prestasi = Prestasi::latest()->take(1)->get();

        return view('frontend.index', compact('galeri', 'agenda', 'prestasi'));
    }

    // ===============================
    // 📸 Detail Galeri
    // ===============================
    public function show($id)
    {
        $item = Galeri::findOrFail($id);
        return view('frontend.show', compact('item'));
    }

    // ===============================
    // 🏆 Halaman Prestasi
    // ===============================
    public function prestasi()
    {
        $list = Prestasi::latest()->get();
        return view('frontend.profil.prestasi', compact('list'));
    }

    // ===============================
    // 🏫 Halaman Profil
    // ===============================
    public function tentang()
    {
        return view('frontend.profil.tentang');
    }

    public function visimisi()
    {
        return view('frontend.profil.visimisi');
    }

    public function guru()
    {
        return view('frontend.profil.guru');
    }

    public function fasilitas()
    {
        return view('frontend.profil.fasilitas');
    }

    // ===============================
    // ⚙️ Halaman Program Keahlian
    // ===============================
    public function pplg()
    {
        return view('frontend.keahlian.pplg');
    }

    public function tkj()
    {
        return view('frontend.keahlian.tkj');
    }

    public function otomotif()
    {
        return view('frontend.keahlian.otomotif');
    }

    public function pengelasan()
    {
        return view('frontend.keahlian.pengelasan');
    }

    // ===============================
    // 🖼️ Halaman Galeri
    // ===============================
    public function foto()
    {
        return view('frontend.galeri.foto');
    }

    public function video()
    {
        return view('frontend.galeri.video');
    }

    // ===============================
    // 🧑‍🎓 Halaman Kesiswaan
    // ===============================
    public function osis()
    {
        return view('frontend.kesiswaan.osis');
    }

    public function mpk()
    {
        return view('frontend.kesiswaan.mpk');
    }

    public function ekstrakurikuler()
    {
        return view('frontend.kesiswaan.ekstrakurikuler');
    }

    // ===============================
    // 📰 Halaman Informasi
    // ===============================
    public function berita()
    {
        return view('frontend.informasi.berita');
    }

    public function pengumuman()
    {
        return view('frontend.informasi.pengumuman');
    }

    public function agenda()
    {
        $agenda = Agenda::orderBy('tanggal', 'desc')->get();
        return view('frontend.informasi.agenda', compact('agenda'));
    }
}
