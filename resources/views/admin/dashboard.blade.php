@extends('layouts.admin')
@section('title','Dashboard Admin')
@section('content')
  <h2>Halo, Nama Admin!</h2>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card-stat">
        <h6>Data Galeri</h6>
        <h3>{{ $totalGaleri }}</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-stat">
        <h6>Kategori</h6>
        <h3>{{ $totalKategori }}</h3>
      </div>
    </div>
  </div>
@endsection