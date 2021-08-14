@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'A propos')
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
                        <div class="row">
                            <div class="col-10 offset-1 mt-5">
                                <div class="row d-flex justify-content-between mt-5 align-items-center">
                                    <span class="customfont customweight title">Qui sommes-nous ?</span>
                                    <hr class="col-12">
                                </div>
                            </div>
                            <div class="col-10 offset-1">
                                <div class="row">
                                    <img src="/pictures/dog-banner.jpg" alt="" class="test1">
                                    <div class="col-12">
                                        <p class="customfont text text-center my-5">Crée en 2021, DOGOOD est une fondation instauré par DEBAERE Quentin qui vise à protéger nos fidèles compagnons : les chiens.<br>Chaque année 100 000 animaux domestiques sont abandonnés, soit environ 273 abandons par jour. C'est pourquoi nous recueillons les chiens abandonnés et/ou maltraités afin qu'ils puissent vivre dans de meilleures conditions avant de rejoindre une famille digne de confiance.</p>
                                        {{-- <p class="customfont moyen">Protecteur de nos fidèles compagnons, nous veillons à ce que chacun d'entre eux vivent pleinement leurs vie dans de bonnes conditions. Sensibilisation, responsabilisation, engagement : nous voulons le meilleur pour eux.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 offset-1">
                                <div class="row d-flex justify-content-between mt-5 align-items-center">
                                    <span class="customfont customweight title">Nos combats</span>
                                    <hr class="col-12">
                                </div>
                            </div>
                            <div class="col-10 offset-1 mb-5">
                                <div class="row">
                                    <div class="col-4 border-right">
                                        <img src="/pictures/abandon.jpg" alt="" class="littlepicture">
                                    </div>
                                    <div class="col-8 d-flex justify-content-start align-items-center customfont text">Lutter contre les abandons</div>
                                </div>
                            </div>
                            <div class="col-10 offset-1 mb-5">
                                <div class="row">
                                    <div class="col-4 border-right">
                                        <img src="/pictures/maltraite.jpg" alt="" class="littlepicture">
                                    </div>
                                    <div class="col-8 d-flex justify-content-start align-items-center customfont text">Agir contre la maltraitance</div>
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