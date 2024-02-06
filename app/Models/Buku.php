<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SDamian\Larasort\AutoSortable;

class Buku extends Model
{
    use HasFactory, AutoSortable;
    protected $table = 'bukus';
    protected $guarded = ['id'];
    protected array $sortables = [
        'id',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'status'
    ];

    public function ulasans()
    {
        return $this->hasMany(User::class);
    }

    public function koleksis()
    {
        return $this->hasMany(Koleksi::class);
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function relasi_kategori_bukus()
    {
        return $this->hasMany(Relasi_Kategori_Buku::class);
    }
}
