<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&family=Great+Vibes">

    <title>Login</title>
  </head>

  <body>
    <div class="coloumn">
        <div class="content">
            <h1>Admin <span>Login</span></h1>

            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif

            <a href="/"><i class="close fa fa-times fa-2x"></i></a>
            <form method="post" action="{{ url('/checkLogin') }}">
                @csrf
                <div class="box">
                    <div class="input-div username">
                        <div class="i">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="isi">
                            <h5>Email</h5>
                            <input class="input" type="text" id="email" name="email">
                        </div>
                    </div>
                    <div class="input-div password">
                        <div class="i">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="isi">
                            <h5>Password</h5>
                            <input class="input" type="password" id="password" name="password">
                        </div>
                    </div>
                    <button type="submit" class="login btn">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/17d8fc2f02.js"></script>

    <!-- Custom Javascript -->
    <script src=" {{ asset('/js/login.js') }}"></script>

  </body>
</html>
