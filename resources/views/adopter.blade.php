@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'J\'adopte')
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
                            <li class="nav-item">
                                <a class="nav-link customfont customweight moyen" href="{{ route('logout') }}">Deconnexion</a>
                            </li>
@endguest
                        </ul>
                    </div>
@endsection



@section('content')
                    <div class="col-12">
                        <div class="row h-100">
                            <div class="col-10 offset-1 h-25 mt-5">
                                <div class="row d-flex justify-content-between mt-5 align-items-center">
                                    <span class="customfont customweight title">Adoptez moi !</span>
                                    <hr class="col-12">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row d-flex justify-content-around">
@foreach ($select as $dog)
                                    <div class="col-10 mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <img class="card-img-top" src="{{$dog->url_picture}}">
                                            </div>
                                            <div class="col-9">
                                                <h5 class="card-title customfont customweight title text-left underline m-0">{{$dog->name}}</h5>
                                                <span class="customfont moyen text-center mb-3">{{$dog->race}} - {{$dog->age}} @if(($dog->age) <= 1) an @else ans @endif</span>
                                                <p class="card-text customfont mt-3">{{$dog->caractere}}</p>
                                                <a href="{{URL::action('MainController@chien', $dog->id)}}" class="btn float-right btn-warning customfont mt-auto mb-3">Plus d'info</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
@endforeach
                                    {{-- <div class="col-10 text-right my-5">
                                        <a href="" class=""><button class="btn btn-warning customweight">1</button></a>
                                        <a href=""><button class="btn btn-warning customweight">2</button></a>
                                    </div> --}}
                                </div>
                            </div> 
                        </div>
                    </div>
@endsection



@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
@endsection