@extends('layout/main')

@section('title','FAQ')

@section('container')
<div class="container">
        <div class="row-f">
            
            <div class="keluhan" id="keluhan">
                <div class="coloumn">
                    <img src="/img/support.png" alt="">
                    <h1 class="text-center">Keluhan</h1>
                    <p class="mb-4 text-center">Apakah Anda memiliki keluhan? Sampaikan disini!</p>
                    
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="post" action="/complaints" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">No WhatsApp</label>
                            <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                            @error('whatsapp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <textarea class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" rows="7" name="keluhan">{{ old('keluhan') }}</textarea>
                            @error('keluhan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="action d-flex justify-content-center">    
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                    
                </div>
            </div>

            <div class="faq" id="faq">
                <h1>Frequently Asked <span>Question</span></h1>
                <div class="box">
                    <div class="inner-box">
                        @foreach( $faqs as $faq )
                        <div class="questions-card" id="{{ $faq->id }}">
                            <div class="question">
                                {{ $faq->pertanyaan }}
                            </div>
                            <div class="answer">
                                {{ $faq->jawaban }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection