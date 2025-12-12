<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GaleriController extends Controller
{
    // 🔹 TAMPILKAN HALAMAN UTAMA (Galeri + Kategori)
    public function index(): View
    {
        $galeri = Galeri::with('kategori')->latest()->paginate(10);
        $kategori = Kategori::latest()->get();

        return view('admin.galeri.index', compact('galeri', 'kategori'));
    }

    // 🔹 FORM TAMBAH GALERI
    public function create(): View
    {
        $kategori = Kategori::all();
        return view('admin.galeri.create', compact('kategori'));
    }

    // 🔹 SIMPAN DATA BARU
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul'        => 'required|min:3',
            'kategori_id'  => 'required|exists:kategori,id', // ✅ tabel kamu kategori
            'gambar'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan gambar
        $image = $request->file('gambar');
        $image->storeAs('galeri', $image->hashName(), 'public');

        // Simpan data ke database
        Galeri::create([
            'judul'        => $request->judul,
            'kategori_id'  => $request->kategori_id,
            'gambar'       => 'galeri/' . $image->hashName(),
        ]);

        return redirect()
            ->route('admin.galeri.index')
            ->with(['success' => 'Galeri berhasil ditambahkan!']);
    }

    // 🔹 FORM EDIT
    public function edit(string $id): View
    {
        $galeri = Galeri::findOrFail($id);
        $kategori = Kategori::all();

        return view('admin.galeri.edit', compact('galeri', 'kategori'));
    }

    // 🔹 UPDATE DATA
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'judul'        => 'required|min:3',
            'kategori_id'  => 'required|exists:kategori,id', // ✅ tetap pakai tabel kategori
            'gambar'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            // Upload gambar baru
            $image = $request->file('gambar');
            $image->storeAs('galeri', $image->hashName(), 'public');

            $galeri->update([
                'judul'        => $request->judul,
                'kategori_id'  => $request->kategori_id,
                'gambar'       => 'galeri/' . $image->hashName(),
            ]);
        } else {
            $galeri->update([
                'judul'        => $request->judul,
                'kategori_id'  => $request->kategori_id,
            ]);
        }

        return redirect()
            ->route('admin.galeri.index')
            ->with(['success' => 'Galeri berhasil diperbarui!']);
    }

    // 🔹 HAPUS DATA
    public function destroy(string $id): RedirectResponse
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with(['success' => 'Galeri berhasil dihapus!']);
    }
}
