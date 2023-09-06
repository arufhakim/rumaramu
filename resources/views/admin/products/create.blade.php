@extends('layout/admin')

@section('title','Tambah Data Produk')

@section('action2','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-c-p">
            <p class="title">Form Tambah <span>Data Produk</span></p>
            <div class="form">
                <form method="post" action="/products" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Produk" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="categories_id">Kategori Produk</label>
                        <select class="form-control @error('categories_id') is-invalid @enderror" style="color: #777" id="categories_id" placeholder="Masukkan Kategori Produk" name="categories_id" value="">
                            <option selected disabled>-- Pilih Kategori Produk --</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->kategori}}</option>
                            @endforeach
                        </select>
                        @error('categories_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Produk</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga Produk" name="harga" value="{{ old('harga') }}">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Produk</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi Produk" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
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
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Menambah Produk Ini?');">Tambah Data</button>
                        <a href="/products" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection