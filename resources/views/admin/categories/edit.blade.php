@extends('layout/admin')

@section('title','Data Kategori')

@section('action8','active')

@section('container')

<div class="container d-flex justify-content-between">
        <div class="row-c-p">
            <p class="title">Form Edit <span>Kategori</span></p>
            <div class="form">
                <form method="post" action="/categories/{{$category->id}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori"  name="kategori" value="{{$category->kategori}}">
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mengedit Kategori Ini?');">Edit Data</button>
                        <a href="/categories" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection