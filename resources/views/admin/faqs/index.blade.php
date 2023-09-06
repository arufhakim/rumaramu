@extends('layout/admin')

@section('title','Data FAQ')

@section('action4','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-f">
            <p class="title">Data <span>FAQ</span></p>
            <div class="faq">
                <a href="/faqs/create" class="btn btn-primary my-3">Tambah Data FAQ</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @foreach( $faqs as $faq )
                    <div class="accordion">
                        <div class="accordion-item" id="{{ $faq->id }}">
                            <a class="accordion-link" href="#{{ $faq->id }}">
                                {{ $faq->pertanyaan }}
                                <i class="fa fa-plus"></i>
                                <i class="fa fa-minus"></i>
                            </a>
                            <div class="answer">
                                <p>
                                    {{ $faq->jawaban }}
                                </p>
                                <div class="detail d-flex justify-content-end mr-1 mt-3 mb-1">
                                    <a href="/faqs/{{ $faq->id }}/edit" class="btn btn-primary mr-1">Edit</a>
                                    <div class="action">
                                    <form action="/faqs/{{ $faq->id }}" method="post" class="delete">
                                    @method ('delete')
                                    @csrf
                                    <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus FAQ Ini?');"> Delete </button>
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection