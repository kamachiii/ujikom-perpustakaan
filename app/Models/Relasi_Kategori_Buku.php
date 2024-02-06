<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi_Kategori_Buku extends Model
{
    use HasFactory;
    protected $table = 'relasi_kategori_buku';
    protected $guarded = ['id'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
