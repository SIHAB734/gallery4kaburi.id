<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Kategori;

class DashboardController extends Controller {
    public function index(){
        $totalGaleri = Galeri::count();
        $totalKategori = Kategori::count();
        return view('admin.dashboard', compact('totalGaleri','totalKategori'));
    }
}