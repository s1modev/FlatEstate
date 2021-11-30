<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FlatEstate</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    

</head>
<body>


<nav class="navbar navbar-expand-lg bg-primary" id="main-nav">
    <div class="container">
        <div class="collapse navbar-collapse order-lg-1 order-3 navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item py-1">
                    <a href="" class="nav-link ">Home</a>
                </li>
                <li class="nav-item py-1">
                    <a href="{{route('posts',['deal'=>'sale', 'sortby'=>'newest'])}}" class="nav-link">Buy</a>
                </li>
                <li class="nav-item py-1">
                    <a href="{{route('posts',['deal'=>'rent', 'sortby'=>'newest'])}}" class="nav-link">Rent</a>
                </li>
                <li class="nav-item py-1">
                    <a href="{{route('post.create')}}" class="nav-link">Sell</a>
                </li>

            </ul>
        </div>

        <a href="" class="navbar-brand text-white mx-2 order-1">
            <h2 class="d-inline align-middle"><img src="{{asset('img/lowgo.png')}}" style="width: 180px; height: 30px;"></h2>
        </a>

        <button class="order-2 navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="text-white fas fa-bars fa-2x"></i>
        </button>

        <div class="collapse navbar-collapse order-lg-3 order-4 navbarSupportedContent" >
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item py-1">
                        <a href="" class="nav-link">  </a>
                    </li>
                    <li class="nav-item py-1">
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="remove-button-css nav-link" style="outline: none;border: 0px; background: transparent; ">Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item py-1">
                        <a href="{{route('register')}}" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item py-1">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
    <div class="container-lg mt-4">
        @yield('content')
    </div>
    

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
            type="text/javascript"></script>
    @yield('script')
</body>

</html>
