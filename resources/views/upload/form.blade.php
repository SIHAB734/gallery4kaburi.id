@extends('layouts.app')

@section('title', 'Unggah Foto Galeri')

@section('content')
<section style="padding:80px 0; background:#f8fafc;">
  <div class="container" style="max-width:750px; margin:auto;">

    <h2 style="font-weight:700; margin-bottom:25px; text-align:center;">
      Unggah Foto Galeri
    </h2>

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data"
          style="background:white; padding:30px; border-radius:16px; box-shadow:0 6px 20px rgba(0,0,0,.08);">
      @csrf

      <!-- PILIH GAMBAR -->
      <label for="image">
        <div id="previewBox"
             style="border:2px dashed #cbd5e1; padding:40px; text-align:center;
                    border-radius:15px; background:#f9fafb; cursor:pointer;">
          <i class="bi bi-image" style="font-size:45px; color:#64748b;"></i>
          <p>Klik untuk memilih gambar</p>
        </div>
      </label>
      <input type="file" id="image" name="image" accept="image/*" required style="display:none;">

      <!-- JUDUL -->
      <label class="form-label mt-4">Judul Galeri</label>
      <input type="text" name="judul" class="form-control" placeholder="Masukkan judul galeri..." required>

      <!-- TANGGAL -->
      <label class="form-label mt-3">Tanggal Galeri</label>
      <input type="date" name="tanggal" class="form-control" required>

      <!-- DESKRIPSI -->
      <label class="form-label mt-3">Deskripsi</label>
      <textarea name="deskripsi" rows="4" class="form-control" placeholder="Tulis deskripsi kegiatan..." required></textarea>

      <!-- SIMPAN -->
      <button class="btn btn-primary w-100 mt-4 py-2" style="font-size:17px; border-radius:10px;">
        Simpan Foto
      </button>

    </form>

  </div>
</section>

<script>
document.getElementById("image").addEventListener("change", function(){
    const file = this.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = e => document.getElementById("previewBox").innerHTML =
            `<img src="${e.target.result}" style="width:100%; max-height:280px; object-fit:cover; border-radius:12px;">`;
        reader.readAsDataURL(file);
    }
});
</script>
@endsection
