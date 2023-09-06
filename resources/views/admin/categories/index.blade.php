@extends('layout/admin')

@section('title','Data Kategori')

@section('action8','active')

@section('container')
    <div class="container d-flex justify-content-between">
        <div class="row-i-p">
            <p class="title">Data <span>Kategori</span></p>
            <div class="product">
                <a href="/categories/create" class="btn btn-primary my-2">Tambah Kategori</a>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="col">{{$loop->iteration}}</th>
                            <th scope="col">{{$category->kategori}}</th>
                            <th scope="col">
                                <div class="action">
                                <form action="/categories/{{ $category->id }}" method="post" class="delete">
                                    @method ('delete')
                                    @csrf
                                    <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Kategori Ini?');"> Delete </button>
                                    <a href="/categories/{{$category->id}}/edit" class="edit btn btn-primary">Edit</a>
                                    </form>
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