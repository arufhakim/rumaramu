@extends('layout/admin')

@section('title','Data Admin')

@section('action7','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-p">
            <p class="title">Data <span>Admin</span></p>
            <div class="product">
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kontak Media</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <th scope="col">{{$loop->iteration}}</th>
                            <th scope="col">{{$contact->kontak}}</th>
                            <th scope="col">{{$contact->nama}}</th>
                            <th scope="col">
                                <div class="action">
                                    <a href="/contacts/{{ $contact->id }}/edit" class="edit btn btn-primary">Edit</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection