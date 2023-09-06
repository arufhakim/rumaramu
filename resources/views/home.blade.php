@extends('layout/start')

@section('title','Rumaramu Gift Parcel & Souvenir')

@section('container')

<div class="isi">

    <div class="tem-sov bg-pink">
        <div class="judul">
            <h3 class="item-d">Temukan Souvenir yang Anda Cari Disini</h3>
        </div>
        <div class="intro">
            <h6 class="item-d w-100">Temukan berbagai souvenir dan hadiah terbaik untuk momen terbaik dalam hidup Anda. <br>Rumaramu memberikan pelayanan dan kinerja yang terbaik untuk Anda.</h6>
            <a href="/kategori" class="lengkap bg-navy item-w">Selengkapnya</a>
        </div>
    </div>

    <div class="ke-ru bg-navy">
        <div class="judul">
            <div>
                <h1 class="item-w">Keunggulan Rumaramu</h1>
                <p class="item-p">Rumaramu selalu berkomitmen untuk memberi pengalaman berbelanja terbaik
                </p>
            </div>
        </div>
        <div class="konten">
            <div class="bungkus">
                <div class="bg-pink bg"></div>
                <div class="item">
                    <h3>Kemasan Menarik</h3>
                    <i class="fa fa-archive item-pd"></i>
                    <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                </div>
            </div>
            <div class="bungkus">
                <div class="bg-navy bg"></div>
                <div class="item">
                    <h3>Dapat di kustomisasi</h3>
                    <i class="fa fa-hand-holding-heart item-pd"></i>
                    <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                </div>
            </div>
            <div class="bungkus">
                <div class="bg-abu bg"></div>
                <div class="item">
                    <h3>Harga terjangkau</h3>
                    <i class="fa fa-money-bill-alt item-pd"></i>
                    <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                </div>
            </div>
            <div class="bungkus">
                <div class="bg-pink-tua bg"></div>
                <div class="item">
                    <h3>Kualitas terjamin</h3>
                    <i class="fa fa-check-circle item-pd"></i>
                    <p>Dapatkan fasilitas GRATIS ongkir untuk pembelanjaan nominal tertentu</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pro-ung">
        <div class="atas">
            <h1 class="item-d">Produk <span class="item-pd">Unggulan</span></h1>
            <h6 class="item-d">Produk terlaris Rumaramu</h6>
        </div>
        <div class="baris">
            @for($i=0; $i <= 5; $i++) @php $coun=count($products); $x=rand(0, $coun-1); @endphp <div class="item">
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($products[$x]->gambar)) }}" alt="">
                <h1 class="nama-pro item-pd">{{$products[$x]->nama}}</h1>
                <p class="kategori-pro">
                    @if(empty($products[$x]->categories->kategori))
                    {{"Semua"}}
                    @else
                    {{$products[$x]->categories->kategori}}
                    @endif
                </p>
                <p class="harga-pro">Rp {{ number_format(( $products[$x]->harga ), 0, ",", ".") }},-</p>
                <a class="lengkap bg-pink" href="/detail/{{$products[$x]->id}}">Selengkapnya</a>
        </div>
        @endfor
    </div>
</div>

<div class="kat-pro bg-pink">
    <div class="desc">
        <h1 class="item-d">Kategori <span class="item-pd">Produk</span></h1>
        <p>Rumaramu menyediakan bebagai bingkisan untuk berbagai macam acara.<br>Cari produk yang Anda inginkan dengan lebih mudah dengan kategori</p>
        <a class="lengkap bg-navy item-w" href="/kategori">Selengkapnya</a>
    </div>
    <div class="pro">
        @foreach($categories as $category)
        <div class="item">
            <img src="data:image/png;base64,{{ chunk_split(base64_encode($category->gambar)) }}" alt="">
            <h1 class="nama-pro item-d">{{$category->kategori}}</h1>
        </div>
        @endforeach
    </div>
</div>

<div class="te-ka">
    <div class="bg-navy">
        <h1 class="item-p">Tentang <span class="item-pd">Kami</span></h1>
    </div>
    <div class="bag">
        <div class="photo">
            <img src="{{ asset('img/Lokasi_1.jpg') }}" alt="">
        </div>
        <div class="jelas">
            <h1>Rumaramu Gift Parcel & Souvenir</h1>
            <p>Berdiri pada 7 Juli 2020 oleh Lita Subagio, berbasis di Kota Malang, Jawa Timur. Rumaramu bergerak pada industri pembuatan souvenir dan hadiah acara akbar seperti Pernikahan, Wisuda, Pelantikan dan Khitanan </p>
            <a class="lengkap bg-pink-tua item-w" href="/tentang">Selengkapnya</a>
        </div>
    </div>
    <div class="sosial bg-pink">
        <h1 class="item-d">Temukan <span class="item-pd">Kami</span></h1>
        <ul>
            <li><a class="item-w bg-navy" href="https://mail.google.com/mail/?view=cm&fs=1&to={{$contacts[3]->nama}}@gmail.com"><i class="fa fa-envelope"></i></a></li>
            <li><a class="item-w bg-navy" href="https://www.facebook.com/{{$contacts[2]->nama}}"><i class="fab fa-facebook-square"></i></a></li>
            <li><a class="item-w bg-navy" href="https://www.instagram.com/{{$contacts[1]->nama}}/"><i class="fab fa-instagram"></i></a></li>
            <li><a class="item-w bg-navy" href="https://api.whatsapp.com/send?phone={{$contacts[0]->nama}}"><i class="fab fa-whatsapp"></i></a></li>
        </ul>
    </div>
</div>

<div class="tes">
    <div class="atas">
    </div>
    <div class="bawah bg-navy">
        <div class="pembungkus">
            <div class="slide hi-slide">
                <div class="hi-prev"><i class="fa fa-angle-left item-w"></i></div>
                <ul>
                    @foreach($testimonies as $ts)
                    <li>
                        <div class="photo">
                            <img src="data:image/png;base64,{{ chunk_split(base64_encode($ts->foto)) }}" alt="">
                        </div>
                        <div class="isi">
                            <h3 class="pesan item-p" style="margin-bottom:27px">{{$ts->testimoni}}</h3>
                            <h4 class="nama item-pd">{{$ts->nama}}</h4>
                            <h6 class="jabatan item-p">{{$ts->jabatan}}</h6>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="hi-next"><i class="fa fa-angle-right item-w"></i></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection