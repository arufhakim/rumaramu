@extends('layout/admin')

@section('title','Detail Testimoni')

@section('action3','active')

@section('container')
    <div class="container d-flex justify-content-between ">
        <div class="row-d-t">
            <p class="title">Detail <span>Testimoni</span></p>
            <div class="testi">
                <div class="foto">
                    <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($testimony->foto)) }}" alt="Card image cap">
                </div>
                <div class="detail">
                    <a href="/testimonies"><i class="close fa fa-times fa-2x"></i></a>
                    <div class="nama">
                        <p class="detail-list">{{ $testimony -> nama }}</p>
                    </div>
                    <div class="jabatan">
                        <p class="detail-list">{{ $testimony -> jabatan }}</p>
                    </div>
                    <div class="testimoni">
                        <p class="detail-list">" {{ $testimony -> testimoni }} "</p>
                    </div>
                    <div class="action">
                    <form action="{{ $testimony->id }}" method="post" class="delete">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Testimoni Ini?');">Delete</button>
                                    </form>
                        <a href="{{ $testimony->id }}/edit" class="edit btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection