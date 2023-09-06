@extends('layout/main')

@section('title','Kategori')

@section('container')

<div class="kategori">
    <div class="up">
        <div class="judul">
            <h1 class="item-d">Katalog <span class="item-pd">Produk</span></h1>
            <p>Katalog Produk Rumaramu</p>
        </div>
        <div class="judul-search">
            <form class="form-inline " action="/kategori" method="GET">
                <input  name="cari" type="text" placeholder="Search"  value="{{ old('cari') }}" class="search-txt">
                <button type="submit" class="search-btn bg-navy"><i class="fa fa-search item-w"></i></button>
            </form>
        </div>
    </div>
    <div class="down">
        <div class="katpro bg-pink">
            <div class="kat">
                <h6>KATEGORI</h6>
                <ul>
                    <li class="li"><a class="item-pd" href="/kategori">Semua</a></li>
                    @foreach($categories as $category)
                    <li class="li"><a class="item-pd" href="/kategori/{{$category->id}}">{{$category->kategori}}</a></li>
                    @endforeach
                </ul> 
            </div>
        </div>
        <div class="pro">
            @foreach($products as $product)
            <div class="item">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
                <h1 class="nama-pro item-pd">{{$product->nama}}</h1>
                <p class="kategori-pro">
                @if(empty($product->categories->kategori))
                {{"Semua"}}
                @else
                {{$product->categories->kategori}}
                @endif
                </p>
                <p class="harga-pro">Rp {{ number_format(($product->harga), 0, ",", ".") }},-</p>
                <a class="lengkap bg-pink item-d" href="/detail/{{$product->id}}">Selengkapnya</a>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection