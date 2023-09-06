<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="/img/headlogo.png" type="image/icon type">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Great+Vibes">

  <title>@yield('title')</title>
</head>

<body>

  <nav class="navbar">
    <div class="menu-toggle">
      <input type="checkbox">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="logo">
      <a class="navbar-brand" href="/">
        <img src="/img/logotok.png" alt="">
      </a>
    </div>
    <ul>
      <li class="nav-item">
        <a claa="nav-link" href="/">Home</a>
        <div class="animationM1"></div>
      </li>
      <li class="nav-item">
        <a claa="nav-link" href="/kategori">Kategori</a>
        <div class="animationM2"></div>
      </li>
      <li class="nav-item">
        <a claa="nav-link" href="/faq">Keluhan</a>
        <div class="animationM4"></div>
      </li>
      <li class="nav-item">
        <a claa="nav-link" href="/faq#faq">FAQ</a>
        <div class="animationM3"></div>
      </li>
      <li class="nav-item">
        <a claa="nav-link" href="/tentang">Tentang</a>
        <div class="animationM5"></div>
      </li>
    </ul>
    <!-- 
      <div class="admin">
        <a class="btn btn-primary" href="{{ url('/login') }}" role="button">Admin</a>
      </div> -->

  </nav>

  <main role="main">
    <div class="content">
      @yield('container')
    </div>
  </main>

  <footer class="footer">
    <div class="container-f">
      <div class="left box">
        <a href="">
          <img src="/img/logotok.png" alt="">
        </a>
        <div class="content">
          <h3>About</h3>
          <p>Jl. Cengger Ayam 1A No. 33, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
        </div>
      </div>
      <div class="middle box">
        <div class="content">
          <ul>
            <h3>Menu</h3>
            <li><a class="item-d" href="/">Home</a></li>
            <li><a class="item-d" href="/kategori">Kategori</a></li>
            <li><a class="item-d" href="/faq#faq">FAQ</a></li>
            <li><a class="item-d" href="/faq">Keluhan</a></li>
            <li><a class="item-d" href="/tentang">Tentang</a></li>
          </ul>
        </div>
      </div>
      <div class="right box">
        <div class="content">
          <ul>
            <h3>About us</h3>
            <li><a class="item-d" href="https://mail.google.com/mail/?view=cm&fs=1&to={{$contacts[3]->nama}}@gmail.com"><i class="fa fa-envelope"></i>rumaramumalang</a></li>
            <li><a class="item-d" href="https://www.facebook.com/{{$contacts[2]->nama}}"><i class="fa fa-facebook-square"></i>rumaramusouvenir</a></li>
            <li><a class="item-d" href="https://www.instagram.com/{{$contacts[1]->nama}}"><i class="fa fa-instagram"></i>rumaramusouvenir</a></li>
            <li><a class="item-d" href="https://api.whatsapp.com/send?phone={{$contacts[0]->nama}}"><i class="fa fa-whatsapp"></i>08123215912</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/17d8fc2f02.js"></script>

  <!-- Custom Javascript -->
  <script src=" {{ asset('/js/script.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="js/jquery.hislide.js"></script>
  <script>
    $('.slide').hiSlide();
  </script>

</body>

</html>