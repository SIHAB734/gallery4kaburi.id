@extends('frontend.layouts.main') {{-- Layout sudah memanggil header & footer --}}

@section('title', 'Tentang Sekolah')

@section('content')
<section style="padding: 60px 0; background-color: #f8f9ff;">
    <div class="container" style="max-width: 900px; margin: auto; text-align: center;">
        
        <h1 style="font-size: 2.2rem; color: #0a2c6b; font-weight: 700; margin-bottom: 20px;">
            Tentang Sekolah SMKN 4 Bogor
        </h1>

        <p style="color: #333; font-size: 1rem; line-height: 1.8; text-align: justify;">
            SMKN 4 Bogor merupakan salah satu sekolah menengah kejuruan negeri di Kota Bogor 
            yang berfokus pada pengembangan keterampilan dan keahlian siswa di bidang teknologi dan industri. 
            Sekolah ini berdiri dengan tujuan mencetak lulusan yang terampil, berkarakter, dan siap menghadapi dunia kerja.
        </p>

        <p style="color: #333; font-size: 1rem; line-height: 1.8; margin-top: 15px; text-align: justify;">
            Selain berorientasi pada keahlian teknis, SMKN 4 Bogor juga mengedepankan pembentukan karakter, 
            kedisiplinan, dan semangat gotong royong agar peserta didik tidak hanya kompeten secara profesional, 
            tetapi juga memiliki etika dan moral yang baik.
        </p>

        <div style="margin-top: 40px;">
            <img src="{{ asset('frontend/image/smkn.jpg') }}" 
                 alt="Foto SMKN 4 Bogor" 
                 style="width: 100%; max-width: 800px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        </div>

    </div>
</section>
@endsection
