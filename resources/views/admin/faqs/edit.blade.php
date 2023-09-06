@extends('layout/admin')

@section('title','Update FAQ')

@section('action4','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-e-f">
            <p class="title">Form Ubah<span>Data FAQ</span></p>
            <div class="form">
            <form method="post" action="/faqs/{{ $faq->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Masukkan Pertanyaan" name="pertanyaan" value="{{ $faq->pertanyaan }}">
                        @error('pertanyaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jawaban">Jawaban</label>
                        <textarea class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" rows="5" placeholder="Masukkan Jawaban" name="jawaban">{{ $faq->jawaban }}</textarea>
                        @error('jawaban')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center"> 
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mengedit FAQ Ini?');">Ubah Data</button>
                        <a href="/faqs" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection