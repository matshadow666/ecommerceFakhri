<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Order;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'gambar',
        'harga',
        'stok',
        'deskripsi',
        'id_kategori'
    ];

    protected $visible = [
        'nama_produk',
        'gambar',
        'harga',
        'stok',
        'deskripsi',
        'id_kategori'
    ];

    protected $timetamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'id_order');
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/produk/' . $this->gambar))) {
            return unlink(public_path('images/produk/' . $this->gambar));
        }
    }
}
