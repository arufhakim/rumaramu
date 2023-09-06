<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- custom css -->
    <link rel="stylesheet" href="/css/dashboard.css">

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Great+Vibes">
    
    <title>@yield('title')</title>
  </head>

  <body>   
    <input type="checkbox" id="check">
    <nav class="navbar">
        <label for="check">
            <i class="fa fa-bars" id="sidebar-btn"></i>
        </label>
        <a class="navbar-brand" href="#">Rumaramu</a>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('/admin') }}">Dashboard</a>
                <a class="dropdown-item" href="">Edit Data</a>
                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <nav class="sidebar">
            <div class="menu">
                <ul class="nav flex-column">
                    <li class="nav-item @yield('action1')">
                        <a class="nav-link" href="/admin">
                            <i class="fa fa-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('action2')">
                        <a class="nav-link" href="/products">
                            <i class="fa fa-shopping-cart"></i>
                            <span> Produk </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('action8')">
                        <a class="nav-link" href="/categories">
                            <i class="fa fa-shopping-bag"></i>
                            <span> Kategori </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('action3')">
                        <a class="nav-link" href="/testimonies">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span> Testimoni </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('action4')">
                        <a class="nav-link" href="/faqs">
                            <i class="fa fa-question-circle"></i>
                            <span> FAQ </span>
                        </a>
                    </li>
                    <li class="nav-item @yield('action5')">
                        <a class="nav-link" href="/complaints">
                            <i class="fa fa-exclamation-triangle"></i>
                            <span> Keluhan </span>
                        </a>
                    </li>
                   
                    <li class="nav-item @yield('action6')">
                        <a class="nav-link" href="/admins">
                            <i class="fa fa-user-circle"></i>
                            <span> Admin </span>
                        </a>
                    </li>
                    
                    <li class="nav-item @yield('action7')">
                        <a class="nav-link" href="/contacts">
                            <i class="fa fa-cogs"></i>
                            <span> Kontak </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="user">
                <a class="nav-link" href="/logout">
                    <i class="fa fa-user"></i>
                    <span> Logout </span>
                </a>
            </div>
        </nav>
        <main role="main">
            <div class="content d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            
            @yield('container')    
            
            </div>
        </main>
    </div>


    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/17d8fc2f02.js"></script>
    <script src="js/modal.js"></script>
  </body>
</html>