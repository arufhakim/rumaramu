@extends('layout/admin')

@section('title','Detail Keluhan')

@section('action5','active')

@section('container')
    <div class="container d-flex justify-content-between ">
        <div class="row-d-c">
            <p class="title">Detail <span>Keluhan</span></p>
            <div class="keluhan">
                <div class="tutup">
                    <a href="/complaints"><i class="close fa fa-times fa-2x"></i></a>
                </div>
                <div class="surat">
                    <div class="intro">
                        <p>Dear, {{auth()->user()->name}} </p>
                        <p>Terdapat kritik serta saran dari pelanggan dengan tanggapan:</p>
                    </div>
                    <div class="isi">
                        <div class="nama">
                            <p class="detail-list">Nama : {{ $complaint -> nama }}</p>
                        </div>
                        <div class="whatsapp">
                            <p class="detail-list">No. Whatsapp : {{ $complaint -> whatsapp }}</p>
                        </div>
                        <div class="detail">
                            <p class="detail-list">Keluhan : {{ $complaint -> keluhan }}</p>
                        </div>
                    </div>
                    <div class="penutup">
                        <p>Besar harapan mereka untuk mendapat pelayanan yang terbaik. Mohon segera ditanggapi!</p>
                    </div>

                    <div class="action">
                                <form action="{{ $complaint->id }}" method="post" class="delete">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="delete btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Keluhan ini Ini?');"> Telah Ditanggapi </button>
                                    </form>
                                </div>
                </div>
            </div>
        </div>
    </div>
@endsection