<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FlatEstate</title>
    @yield('header')
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
                <li class="nav-item p-0">
                    <a href="{{route('home')}}" class="nav-link py-2 px-3">Home</a>
                </li>
                <li class="nav-item p-0">
                    <a href="{{route('posts',['deal'=>'sale', 'sortby'=>'newest'])}}" class="nav-link py-2 px-3">Buy</a>
                </li>
                <li class="nav-item p-0">
                    <a href="{{route('posts',['deal'=>'rent', 'sortby'=>'newest'])}}" class="nav-link py-2 px-3">Rent</a>
                </li>
                <li class="nav-item p-0">
                    <a href="{{route('post.create')}}" class="nav-link py-2 px-3">Sell</a>
                </li>
            </ul>
        </div>

        <a href="{{route('home')}}" class="navbar-brand text-white order-1 mr-lg-5">
            <img class="ml-2" src="{{asset('img/lowgo.png')}}" style="width: 180px; height: 30px;">
        </a>

        <button class="order-2 navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="text-white fas fa-bars fa-2x"></i>
        </button>

        <div class="collapse navbar-collapse order-lg-3 order-4 navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown ml-lg-4">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> account
                        </a>
                        <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{route('account.posts')}}">Properties</a>
                            <a class="dropdown-item text-dark" href="{{route('settings.account')}}">Settings</a>
                            <div class="dropdown-divider bg-dark"></div>
                            <a class="dropdown-item text-dark" href="{{route('pricing')}}">Buy Credits</a>
                        </div>
                    </li>
                    <li class="nav-item p-0 mr-lg-2">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="remove-button-css nav-link py-2 px-3" style="outline: none;border: 0px; background: transparent; ">Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item p-0 ml-lg-5">
                        <a href="{{route('register')}}" class="nav-link py-2 px-3">Register</a>
                    </li>
                    <li class="nav-item p-0 mr-lg-3">
                        <a href="{{route('login')}}" class="nav-link py-2 px-3">Login</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@if (!isset($home) )
    <div class="container-lg mt-4">
        @yield('content')
    </div>
@endif
@if (isset($home))
    <div>
        @yield('home')
    </div>
@endif
    
    
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    @yield('script')
</body>

</html>
