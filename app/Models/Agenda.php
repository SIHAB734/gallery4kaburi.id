<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
 use HasFactory;

    // Nama tabel (opsional, Laravel otomatis pakai 'agenda')
    protected $table = 'agenda';

    // Kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'lokasi',
    ];
}
