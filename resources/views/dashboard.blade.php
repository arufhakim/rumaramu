@extends('layout/admin')

@section('title','Dashboard')

@section('action1','active')

@section('container')
    <div class="container">
        <div class="row-d">
            <p class="title">Selamat Datang <span>{{Auth::user()->name}}</span> , di Database Rumaramu.</p>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <div class="laporan">
                <div class="produk">
                    <div class="card">
                        <div class="card-header">
                            <p>Produk</p>
                        </div>
                        <div class="card-body">
                            <p>Total Produk : <span class="badge badge-primary">{{ $products->count() }}</span></p>
                            <div class="button">
                                <div class="action">
                                    <a href="/products" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimoni">
                    <div class="card">
                        <div class="card-header">
                            <p>Testimoni</p>
                        </div>
                        <div class="card-body">
                            <p>Total Testimoni : 
                                @if($testimonies->count() != 3)
                                <span class="badge badge-danger">{{ $testimonies->count() }}</span>
                                <div class="alert alert-danger" role="alert">
                                    Sebaiknya jumlah testimoni adalah 3
                                </div>
                                @else
                                <span class="badge badge-primary">{{ $testimonies->count() }}</span>
                                @endif
                            </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/testimonies" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="card">
                        <div class="card-header">
                            <p>FAQ</p>
                        </div>
                        <div class="card-body">
                            <p>Total FAQ : 
                                @if($faqs->count() %2 == 0)
                                <span class="badge badge-primary">{{ $faqs->count() }}</span>
                                @else
                                <span class="badge badge-danger">{{ $faqs->count() }}</span>
                                <div class="alert alert-danger" role="alert">
                                    Sebaiknya FAQ berjumlah genap
                                </div>
                                @endif
                            </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/faqs" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="komplain">
                    <div class="card">
                        <div class="card-header">
                            <p>Keluhan</p>
                        </div>
                        <div class="card-body">
                            <p>Total Keluhan : 
                                @if ($complaints->count() == 0)
                                <span class="badge badge-success">{{ $complaints->count() }}</span>
                                @else
                                <span class="badge badge-danger">{{ $complaints->count() }}</span>
                                @endif
                            </p>
                            <div class="button">
                                <div class="action">
                                    <a href="/complaints" class="info">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection