@extends('layout/main')

@section('title','Kategori')

@section('container')

<div class="det-pro">
    <div class="up">
        <div class="photo">
            <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
        </div>
        <div class="detail">
            <div class="atas">
                <h1 class="item-pd">{{$product->nama}}</h1>
                <p class="kategori">
                @if(empty($product->categories->kategori))
                {{"Semua"}}
                @else
                {{$product->categories->kategori}}
                @endif
                </p>
                <p class="penjelasan">{{$product->deskripsi}}</p>
            </div>
            <div class="bawah">
                <h3 class="harga bg-pink item-d">{{$product->harga}}</h1>
                <a class="item-w bg-pink-tua" href="https://api.whatsapp.com/send?phone={{$contacts[0]->nama}}">Pesan<i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <div class="mid"></div>
    <div class="down">
        <div class="upper bg-navy">
        </div>
        <div class="bottom bg-pink">
            <div class="pembungkus">
                <h1 class="item-d">Produk<span class="item-pd"> Terkait</span></h1>
                <p class="">Temukan berbagai souvenir dan hadiah terbaik untuk momen terbaik dalam hidup Anda. Rumaramu memberikan pelayanan dan kinerja yang terbaik untuk Anda. </p>
            </div>
            @for($i=0; $i <= 2; $i++)
            @php 
            $coun=count($products); 
            $x=rand(0, $coun-1);
            @endphp
            <div class="item">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($product->gambar)) }}" alt="">
                <h1 class="nama-pro item-pd">{{$products[$x]->nama}}</h1>
                <p class="kategori-pro">
                @if(empty($products[$x]->categories->kategori))
                {{"Semua"}}
                @else
                {{$products[$x]->categories->kategori}}
                @endif
                </p>
                <p class="harga-pro">{{$products[$x]->harga}}</p>
                <a class="lengkap bg-pink item-d" href="/detail/{{$product->id}}">Selengkapnya</a>
            </div>
            @endfor
        </div>
    </div>
</div>

@endsection