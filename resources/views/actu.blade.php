@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Actualités')
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
                                    <span class="customfont customweight title">Actualités</span>
                                    <hr class="col-12">
                                </div>
                            </div>
                            <div class="col-10 offset-1 h-100 d-flex justify-content-between">
                                <div class="row h-100 d-flex justify-content-around">
                                @foreach ($articles as $article)
                                    @if($loop->iteration <= 2)
                                    <div class="card col-6 p-0 mb-5" style="width: 18rem;">
                                        <img class="card-img-top" src="{{$article->urlToImage}}" alt="Card image cap">
                                        <div class="card-body d-flex flex-column">
                                          <h5 class="card-title">{{$article->title}}</h5>
                                          <p class="card-text">{{$article->description}}</p>
                                          <a href="{{$article->url}}" class="btn btn-warning float-right customfont mt-auto">Lire la suite</a>
                                        </div>
                                    </div>
                                    @else
                                    <div class="card p-0 mb-5" style="width: 18rem;">
                                        <img class="card-img-top" src="{{$article->urlToImage}}">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title customfont customweight moyen">{{$article->title}}</h5>
                                            <a href="{{$article->url}}" target="_blank" class="btn btn-warning float-right customfont mt-auto">Lire la suite</a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
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