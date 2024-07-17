<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('user.index', compact('produk', 'kategori'));
    }

    public function shop()
    {
        return view('user.shop');
    }

    public function cart()
    {
        return view('user.cart');
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function Produk()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('user.shop', compact('produk', 'kategori'));
    }

    public function produkDetail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('user.produk_detail', compact('produk'));
    }

    public function kategori($id)
    {
        return $this->produkByKategori($id);
    }

    public function produkByKategori($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::where('id_kategori', $id)->get();
        return view('user.shop', compact('produk', 'kategori'));
    }

    public function error()
    {
        return view('error');
    }

    public function errorThisPage()
    {
        return view('errorthispage');
    }
}
