@extends('layout/admin')

@section('title','Update Data Testimony')

@section('action3','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-e-t">
            <p class="title">Form Ubah <span>Data Testimoni</span></p>
            <div class="form">
            <form method="post" action="/testimonies/{{$testimony->id}}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group" style="width:800px">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $testimony->nama }}" style="color:#757575">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <textarea class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" rows="5" placeholder="Masukkan Jabatan" name="jabatan" style="color:#757575">{{ $testimony->jabatan }}</textarea>
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="testimoni">Testimoni</label>
                        <textarea class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" rows="5" placeholder="Masukkan Testimoni" name="testimoni" style="color:#757575">{{ $testimony->testimoni }}</textarea>
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
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mengedit Testimoni Ini?');">Ubah Data</button>
                        <a href="/testimonies/{{ $testimony->id }}" class="card-link ml-3 mt-2">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection