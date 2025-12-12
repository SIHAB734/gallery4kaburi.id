<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            padding: 15px 20px;
        }

        .card-body {
            padding: 30px;
        }

        .form-group label {
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            padding: 10px 12px;
            font-size: 15px;
            border-radius: 6px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 20px;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        #previewGambar {
            width: 250px;
            height: auto;
            object-fit: cover;
            display: none;
            margin-top: 10px;
            border-radius: 6px;
        }
    </style>
</head>

<body>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="m-0">Tambah Data Galeri</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Input Gambar --}}
                        <div class="form-group">
                            <label>Gambar <span class="text-danger">*</span></label>
                            <input type="file" name="gambar" id="gambarInput" class="form-control @error('gambar') is-invalid @enderror" required>
                            @error('gambar')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <img id="previewGambar" src="#" alt="Preview Gambar">
                        </div>

                        {{-- Input Judul --}}
                        <div class="form-group">
                            <label>Judul Galeri <span class="text-danger">*</span></label>
                            <input type="text" name="judul" value="{{ old('judul') }}" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul galeri" required>
                            @error('judul')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kategori --}}
                        <div class="form-group">
                            <label>Kategori <span class="text-danger">*</span></label>
                            <select name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($kategori as $item)
                                    <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
                            <div>
                                <button type="reset" class="btn btn-warning me-2">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const gambarInput = document.getElementById('gambarInput');
    const preview = document.getElementById('previewGambar');

    gambarInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    });
</script>
</body>
</html>
