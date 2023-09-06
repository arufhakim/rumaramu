@extends('layout/admin')

@section('title','Detail Produk')

@section('action2','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-d-p">
            <p class="title">Detail <span>Produk</span></p>
            

            <div class="product">
                <div class="gambar">
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
                </div>
                <div class="detail">
                    <a href="/products"><i class="close fa fa-times fa-2x"></i></a>
                    <div class="nama">
                        <p class="detail-list">{{ $product -> nama }}</p>
                    </div>
                    <div class="kategori">
                        <p class="detail-list">
                        @if(empty($product->categories->kategori))
                        {{"Semua"}}
                        @else
                        {{$product->categories->kategori}}
                        @endif</p>
                    </div>
                    <div class="deskripsi">
                        <p class="detail-list">{{ $product -> deskripsi }}</p>
                    </div>
                    <div class="harga">
                        <p class="detail-list">Rp {{ number_format(($product -> harga), 0, ",", ".") }},-</p>
                    </div>
                    <div class="action">
                    <form action="{{ $product->id }}" method="post" class="delete">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Produk Ini?');">Delete</button>
                                    </form>
                        <a href="{{ $product->id }}/edit" class="edit btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection