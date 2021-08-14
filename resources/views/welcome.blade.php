@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Accueil')
@section('navbar')
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('actu')}}">Actualités</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('about')}}">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{route('contact')}}">Contact</a>
                            </li>
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
                                {{-- <button class="btn btn-warning dropdown-toggle customfont customweight" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-list"></i></button> --}}
                                <button class="btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-list moyen"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link customfont" href="#">Mon profile</a>
                                    <a class="nav-link customfont customweight" href="{{route('logout')}}">Deconnexion</a>
                                </div>
                            </div>
                            {{-- <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{ route('logout') }}">Deconnexion</a>
                            </li> --}}
@endguest
                        </ul>
                    </div>
@endsection






@section('content')
        <div class="col-12 h-100">
            <div class="row h-100">
                <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active">
                            <a class="d-flex justify-content-end align-items-center" href="">
                                <img class="d-block w-100" src="/pictures/dog2-w.jpg" alt="First slide">
                                <span class="position-absolute customtext1">CERTAIN LES ABANDONNENT,<br>D'AUTRES LES RECUEILLENT</span>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/pictures/dog.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/pictures/dog1.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="slidericon"><i class="bi bi-caret-left-fill"></i></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="slidericon"><i class="bi bi-caret-right-fill"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-10 offset-1 mt-5">
            <div class="row d-flex justify-content-between align-items-center">
                <span class="customfont customweight title">Actualités</span>
                <a href="{{route('actu')}}"><button class="btn btn-warning customweight customfont">Toute l'actu</button></a>
                <hr class="col-12">
            </div>
        </div>
        <div class="col-12">
            <div class="row d-flex justify-content-around">
@foreach ($articles as $article)
                    <div class="card p-0 mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="{{$article->urlToImage}}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title customfont customweight moyen">{{$article->title}}</h5>
                            <p class="card-text">{{$article->description}}</p>
                            <a href="{{$article->url}}" target="_blank" class="btn float-right btn-warning customfont mt-auto">Lire la suite</a>
                        </div>
                    </div>
@endforeach 
            </div>
        </div>
        <div class="col-12 bg-warning">
            <div class="row">
                <div class="col-10 offset-1 mt-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <span class="customfont customweight title">Je m'engage</span>
                        <hr class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 h-50 bg-warning">
            <div class="row d-flex justify-content-around">
                <a href="https://www.facebook.com/Dogood-111645114514234/" target="_blank">
                    <div class="card p-0 mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/pictures/facebook.jpg">
                        <div class="card-body d-flex justify-content-center">
                            <span class="text-center customfont customweight moyen">Suivez-nous sur Facebook</span>
                        </div>
                    </div>
                </a>
                <a href="https://twitter.com/Assoc_Dogood" target="_blank">
                    <div class="card p-0 mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/pictures/twitter.jpg">
                        <div class="card-body d-flex justify-content-center">
                            <h5 class="text-center customfont customweight moyen">Suivez-nous sur Twitter</h5>
                        </div>
                    </div>
                </a>        
                <a href="https://www.instagram.com/assoc_dogood/" target="_blank">
                    <div class="card p-0 mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/pictures/instagram.jpg">
                        <div class="card-body d-flex justify-content-center">
                            <h5 class="text-center customfont customweight moyen">Suivez-nous sur Instagram</h5>
                        </div>
                    </div>
                </a>    
                <a href="">
                    <div class="card p-0 mb-5" style="width: 18rem;">
                        <img class="card-img-top" src="/pictures/don.jpg">
                        <div class="card-body d-flex justify-content-center">
                            <h5 class="text-center customfont customweight moyen">Faites un don</h5>
                        </div>
                    </div>
                </a>           
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-10 offset-1 mt-5">
                    <div class="row d-flex justify-content-between align-items-center">
                        <span class="customfont customweight title">Ils n'attendent que vous</span>
                        <a href="{{route('adopter')}}"><button class="btn btn-warning customweight customfont">Tout les chiens</button></a>
                        <hr class="col-12">
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex justify-content-around">
        @foreach ($select as $dog)
                            <div class="card p-0 mb-5" style="width: 18rem;">
                                <a href="{{URL::action('MainController@chien', $dog->id)}}">
                                    <img class="card-img-top" src="{{$dog->url_picture}}">
                                    <div class="card-body d-flex flex-column py-0">
                                        <h5 class="card-title customfont customweight moyenplus text-center mt-3">{{$dog->name}}</h5>
                                        <span class="customfont moyen mb-3">{{$dog->race}} - {{$dog->age}} @if(($dog->age) <= 1) an @else ans @endif - {{$dog->sexe}}</span>
                                    </div>
                                </a>
                            </div>
        @endforeach 
                    </div>
                </div>
            </div>
        </div> 
@endsection