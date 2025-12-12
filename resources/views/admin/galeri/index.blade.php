<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Galeri - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: #f5f6fa;">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                {{-- Header --}}
                <div class="text-center mb-4">
                    <h3> Data Galeri</h3>
                    <h6 class="text-muted">
                        <a href="{{ url('/') }}" target="_blank"></a>
                    </h6>
                    <hr>
                </div>

                {{-- Card Data Galeri --}}
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        {{-- Tombol Tambah --}}
                        <a href="{{ route('admin.galeri.create') }}" class="btn btn-md btn-success mb-3">
                            + Tambah Gambar
                        </a>

                        {{-- Tabel Data --}}
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th scope="col" width="150">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">KATEGORI</th>
                                    <th scope="col" width="20%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($galeri as $g)
                                    <tr>
                                        {{-- Gambar --}}
                                        <td class="text-center">
                                            <img src="{{ asset('storage/'.$g->gambar) }}"
                                                 class="rounded"
                                                 style="width: 140px; height: 90px; object-fit: cover;">
                                        </td>

                                        {{-- Judul --}}
                                        <td>{{ $g->judul }}</td>

                                        {{-- Kategori --}}
                                        <td>{{ $g->kategori->nama ?? '-' }}</td>

                                        {{-- Tombol Aksi --}}
                                        <td class="text-center">
                                            <form id="deleteForm{{ $g->id }}"
                                                  action="{{ route('admin.galeri.destroy', $g->id) }}"
                                                  method="POST">
                                                <a href="{{ route('admin.galeri.edit', $g->id) }}"
                                                   class="btn btn-sm btn-primary">
                                                    EDIT
                                                </a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn btn-sm btn-danger" 
                                                    onclick="confirmDelete({{ $g->id }})">
                                                    HAPUS
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-warning text-center m-0">
                                                Belum ada data galeri.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {{ $galeri->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Bootstrap & SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- SweetAlert Notifikasi --}}
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'BERHASIL',
                text: '{{ session('success') }}',
                width: 350,
                showConfirmButton: false,
                timer: 1800,
                timerProgressBar: true,
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'GAGAL',
                text: '{{ session('error') }}',
                showConfirmButton: true,
            });
        </script>
    @endif

    {{-- Konfirmasi Hapus Data --}}
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                width: 450,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                }
            });
        }
    </script>

</body>
</html>
