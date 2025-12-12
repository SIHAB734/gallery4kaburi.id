@extends('frontend.layouts.main')

@section('title', 'Agenda Sekolah')

@section('content')
<section style="padding: 60px 0; background-color: #f8f9ff;">
  <div class="container" style="max-width: 1000px; margin: auto;">

    <h1 style="text-align:center; font-size: 2.4rem; color:#0a2c6b; font-weight:700; margin-bottom: 30px;">
      Agenda Sekolah SMKN 4 Bogor
    </h1>

    <p style="text-align:center; color:#444; margin-bottom: 40px;">
      Berikut adalah rangkaian agenda kegiatan yang rutin dan khusus di SMKN 4 Bogor.
    </p>

    <!-- ===== TABLE AGENDA ===== -->
    <div style="overflow-x:auto;">
      <table style="
        width:100%; 
        border-collapse:collapse; 
        background:#fff;
        border-radius:10px;
        overflow:hidden;
        box-shadow:0 5px 20px rgba(0,0,0,0.08);
      ">
        <thead style="background:#0a2c6b; color:#fff;">
          <tr>
            <th style="padding:14px; text-align:center;">No</th>
            <th style="padding:14px; text-align:left;">Agenda</th>
            <th style="padding:14px; text-align:center;">Tanggal</th>
            <th style="padding:14px; text-align:left;">Keterangan</th>
          </tr>
        </thead>

        <tbody>

          <!-- Kegiatan Rutin -->
          <tr style="background:#e9efff; font-weight:600;">
            <td colspan="4" style="padding:12px;">Kegiatan Rutin</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">1</td>
            <td style="padding:12px;">Upacara Bendera</td>
            <td style="padding:12px; text-align:center;">Setiap Senin</td>
            <td style="padding:12px;">Upacara rutin seluruh siswa</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">2</td>
            <td style="padding:12px;">Kegiatan Ekstrakurikuler</td>
            <td style="padding:12px; text-align:center;">Jumat/Sabtu</td>
            <td style="padding:12px;">Ekskul semua bidang & jurusan</td>
          </tr>

          <!-- Kegiatan Akademik -->
          <tr style="background:#e9efff; font-weight:600;">
            <td colspan="4" style="padding:12px;">Kegiatan Akademik</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">3</td>
            <td style="padding:12px;">PTS</td>
            <td style="padding:12px; text-align:center;">Tengah Semester</td>
            <td style="padding:12px;">Penilaian Tengah Semester</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">4</td>
            <td style="padding:12px;">PAS</td>
            <td style="padding:12px; text-align:center;">Akhir Semester</td>
            <td style="padding:12px;">Penilaian Akhir Semester</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">5</td>
            <td style="padding:12px;">ANBK</td>
            <td style="padding:12px; text-align:center;">Sesuai Jadwal Nasional</td>
            <td style="padding:12px;">Asesmen Nasional Kelas XI</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">6</td>
            <td style="padding:12px;">UKK</td>
            <td style="padding:12px; text-align:center;">Awal Tahun</td>
            <td style="padding:12px;">Uji Kompetensi Keahlian Kelas XII</td>
          </tr>

          <!-- Event Khusus -->
          <tr style="background:#e9efff; font-weight:600;">
            <td colspan="4" style="padding:12px;">Event & Kegiatan Khusus</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">7</td>
            <td style="padding:12px;">Peringatan Hari Guru</td>
            <td style="padding:12px; text-align:center;">25 November</td>
            <td style="padding:12px;">Upacara + Apresiasi Guru</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">8</td>
            <td style="padding:12px;">Class Meeting</td>
            <td style="padding:12px; text-align:center;">Setelah PAS</td>
            <td style="padding:12px;">Lomba antar kelas</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">9</td>
            <td style="padding:12px;">Jumat Berkah</td>
            <td style="padding:12px; text-align:center;">Mingguan</td>
            <td style="padding:12px;">Program berbagi & sosial</td>
          </tr>

          <tr>
            <td style="padding:12px; text-align:center;">10</td>
            <td style="padding:12px;">Pameran Karya Siswa</td>
            <td style="padding:12px; text-align:center;">Sesuai Kalender</td>
            <td style="padding:12px;">Pameran project siswa</td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</section>
@endsection
