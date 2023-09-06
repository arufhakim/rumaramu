@extends('layout/admin')

@section('title','Data Produk')

@section('action2','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-p">
            <p class="title">Data <span>Produk</span></p>
            <div class="product">
                <a href="/products/create" class="btn btn-primary my-2">Tambah Data Produk</a>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $products as $product )
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->nama }}</td>
                            <td>
                            @if(empty($product->categories->kategori))
                            {{"Semua"}}
                            @else
                            {{$product->categories->kategori}}
                            @endif
                            </td>
                            <td>
                                <a href="/products/{{ $product->id }}" class="badge badge-pill badge-info">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection