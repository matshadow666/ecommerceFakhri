<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
        'deskripsi'
    ];

    protected $visible = [
        'nama_kategori',
        'deskripsi'
    ];

    protected $timetamps = true;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_produk');
    }
}
