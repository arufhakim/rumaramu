@extends('layout/admin')

@section('title','Data Admin')

@section('action6','active')

@section('container')

<div class="container d-flex justify-content-between">
        <div class="row-c-p">
            <p class="title">Form Edit <span>Admin</span></p>
            <div class="form">
                <form method="post" action="/admins/{{ $user->id }}" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ $user->name }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password Lama</label>
                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="password" name="current_password" value="{{ old('current_password') }}">
                        @error('current_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password Baru</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="password" name="confirm_password" value="">
                        @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="action d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Mengedit Admin Ini?');">Edit Data</button>
                        <a href="" class="btn btn-link">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection