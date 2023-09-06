@extends('layout/admin')

@section('title','Data Testimoni')

@section('action3','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-t">
            <p class="title">Data <span>Testimoni</span></p>
            <div class="testi">
                <a href="/testimonies/create" class="btn btn-primary my-3">Tambah Data Testimoni</a>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <ul class="list-group">
                    @foreach( $testimonies as $testimony )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $testimony->nama }}
                        <a href="/testimonies/{{ $testimony->id }}" class="badge badge-pill badge-info">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection