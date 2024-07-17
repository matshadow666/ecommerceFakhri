@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Produk Create</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Create.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Produk</li>
                        <li class="breadcrumb-item active">Create</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Produk
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Nama Produk</label>
                                        <input type="text"
                                            class="form-control @error('nama_produk') is-invalid @enderror"
                                            name="nama_produk"></input>
                                        @error('nama_produk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar"
                                            class="form-control @error('gambar') is-invalid @enderror">
                                        @error('gambar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Harga</label>
                                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                            name="harga"></input>
                                        @error('harga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Stok</label>
                                        <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                            name="stok"></input>
                                        @error('stok')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Deskripsi</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Nama Kategori</label>
                                        <select name="id_kategori"
                                            class="form-control @error('id_kategori') is-invalid @enderror">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_kategori')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <button class="btn btn-sm btn-success" type="submit">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
