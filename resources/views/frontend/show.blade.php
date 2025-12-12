@extends('layouts.frontend')
@section('title', $item->judul)
@section('content')

<style>
  body {
    background: #f4f7ff;
  }
  .detail-galeri {
    max-width: 500px;
    margin: 40px auto;
    background: #fff;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.12);
  }
  .detail-galeri img {
    width: 90%;
    height: auto;
    border-radius: 12px;
    margin-bottom: 20px;
  }
  .detail-galeri h2 {
    color: #003366;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .detail-galeri p {
    color: #555;
    font-size: 14px;
    line-height: 1.6;
  }
</style>

<div class="detail-galeri">
  <a href="/storage/{{ $item->gambar }}" target="_blank">
    <img src="/storage/{{ $item->gambar }}" alt="{{ $item->judul }}">
  </a>

  <h2>{{ $item->judul }}</h2>
  <p>{{ $item->deskripsi }}</p>
</div>

@endsection
