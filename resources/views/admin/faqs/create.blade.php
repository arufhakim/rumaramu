@extends('layout/admin')

@section('title','Tambah Data FAQ')

@section('action4','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-c-f">
            <p class="title">Form Tambah <span>Data FAQ</span></p>
            <div class="form">
                <form method="post" action="/faqs">
                    @csrf
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Pertanyaan" name="pertanyaan" value="{{ old('pertanyaan') }}">
                        @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jawaban">Jawaban</label>
                        <textarea class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" rows="5" placeholder="Masukkan Jawaban" name="jawaban">{{ old('jawaban') }}</textarea>
                        @error('jawaban')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Menambah FAQ Ini?');">Tambah Data</button>
                        <a href="/faqs" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection