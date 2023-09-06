@extends('layout/admin')

@section('title','Data Admin')

@section('action6','active')

@section('container')

<div class="container d-flex justify-content-between">
        <div class="row-c-p">
            <p class="title">Form Edit <span>Kontak</span></p>
            <div class="form">
                <form method="post" action="/contacts/{{ $contact->id }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kontak">Kontak Media</label>
                        <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak"  name="kontak" value="{{ $contact->kontak }}" readonly>
                        @error('kontak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $contact->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mengedit Kontak Ini?');">Edit Data</button>
                        <a href="/contacts" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection