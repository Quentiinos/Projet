<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dogood | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container-fluid h-100 p-0">
{{-- -------------------------------------------------------------------------- Navbar lg+ -------------------------------------------------------------------------- --}}
        <nav class="navbar navbar-light p-0 d-none d-lg-block">
            <div class="col-12 fixed-top">
                <div class="row bg-white">
                    <div class="col-4 d-flex align-items-center">
                        <a href="/" id="logozone">
                            <img class="logo mt-3 ml-5 mr-3 mb-3" id="logo" src="/pictures/dogood.png">
                            <span class="logoText">DOGOOD</span>
                        </a>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('adopter')}}">Adoption</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('actu')}}">Actualités</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('about')}}">A propos</a>
                            </li>
@if(Auth::check())
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('contact')}}">Contact</a>
                            </li>
@endif
                        </ul>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <ul class="nav">
@guest
@if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{ route('login') }}">Connexion</a>
                            </li>
                            <li class="nav-item">
@if (Route::has('register'))
                                <a class="nav-link customfont customweight moyen" href="{{ route('register') }}">Inscription</a>
@endif
                            </li>
@endif
@else
                            <div class="dropdown">
                                <button class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-list moyen"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
@if(Auth::check() && Auth::user()->privilège == 1)
                                    <a class="nav-link customfont" href="{{route('admin')}}">Administration</a>
@endif
                                    <a class="nav-link customfont" href="{{route('parametres')}}">Paramètres</a>
                                    <a class="nav-link customfont customweight" href="{{route('logout')}}">Deconnexion</a>
                                </div>
                            </div>
@endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

{{-- -------------------------------------------------------------------------- Title Smartphone -------------------------------------------------------------------------- --}}
        <div class="col-12 d-flex d-lg-none justify-content-center align-items-center border-bottom">
            <span class="logoText title m-3">DOGOOD</span>
        </div>

{{-- -------------------------------------------------------------------------- Navbar sm-md -------------------------------------------------------------------------- --}}
        <nav class="navbar navbar-light p-0 d-block d-lg-none">
            <div class="col-12 fixed-bottom">
                <div class="row bg-white d-flex align-items-center">
                    <div class="col-4">
                        <ul class="nav d-flex justify-content-around">
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('adopter')}}"><i class="fas fa-paw"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('actu')}}"><i class="fas fa-newspaper"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <a href="/" id="logozone" class="d-flex justify-content-around">
                            <img class="logo my-3" id="logo" src="/pictures/dogood.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <ul class="nav d-flex justify-content-around">
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('about')}}"><i class="fas fa-info-circle"></i></a>
                            </li>
@guest
@if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                            </li>
@endif
@else
                            <div class="dropup">
                                <button class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link customfont" href="{{route('contact')}}">Contact</a>
                                    <a class="nav-link customfont" href="{{route('parametres')}}">Paramètres</a>
@if(Auth::check() && Auth::user()->privilège == 1)
                                    <a class="nav-link customfont" href="{{route('admin')}}">Administration</a>
@endif
                                    <a class="nav-link customfont customweight" href="{{route('logout')}}">Deconnexion</a>
                                </div>
                            </div>
@endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
@yield('content')
@yield('footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9214a30a67.js" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
    
</body>
</html>

