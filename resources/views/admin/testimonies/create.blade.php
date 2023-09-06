@extends('layout/admin')

@section('title','Tambah Data Testimoni')

@section('action3','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-c-t">
            <p class="title">Form Tambah <span>Data Testimoni</span></p>
            <div class="form">
            <form method="post" action="/testimonies" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan" value="{{ old('jabatan') }}">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="testimoni">Testimoni</label>
                        <textarea class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" rows="7" placeholder="Masukkan Testimoni" name="testimoni">{{ old('testimoni') }}</textarea>
                        @error('testimoni')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">    
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Menambah Testimoni Ini?');">Tambah Data</button>
                        <a href="/testimonies" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection