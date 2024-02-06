<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = ['id'];

    public function relasi_kategori_bukus()
    {
        return $this->hasMany(Relasi_Kategori_Buku::class);
    }
}
