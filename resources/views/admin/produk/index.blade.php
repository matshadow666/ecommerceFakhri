@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Produk Index</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Index.html"><i class="fa fa-dashboard"></i></a></li>
                        <li class="breadcrumb-item">Produk</li>
                        <li class="breadcrumb-item active">Index</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card border-secondary">
                    <div class="card-header">Data Produk
                        <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead align="center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                @php $no = 1; @endphp
                                <tbody align="center">
                                    @foreach ($produk as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->nama_produk }}</td>
                                            <td align="center"><img src="{{ asset('/images/produk/' . $item->gambar) }}"
                                                style="width: 100px;" alt="">
                                            <td>
                                                <form align="center" action="{{ route('produk.destroy', $item->id) }}"
                                                    id="delete-data" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('produk.edit', $item->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/16187/16187749.png"
                                                            style="" srcset="" width="20px">
                                                    </a>
                                                    <a href="{{ route('produk.show', $item->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/6804/6804049.png"
                                                            alt="" srcset="" width="20px">
                                                    </a>

                                                    <button class="btn btn-sm btn-outline-primary" type="submit"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png"
                                                            alt="" srcset="" width="20px"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
