@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Contact')
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
                            <div class="col-8 mt-5">
                                <div class="col-12 d-flex justify-content-center align-items-end mt-5 mb-5">
                                    <span class="customfont customweight title">CONTACT</span>
                                </div>
                                <form class="border-right" action="/contact-send" method="post">
                                    @csrf
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-6">
                                            <label for="nom" class="customfont customweight little">Nom</label>
                                            <input id="nom" type="text" class="form-control" name="nom" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-6">
                                            <label for="email" class="customfont customweight little">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-6">
                                            <label for="sujet" class="customfont customweight little">Sujet</label>
                                            <input id="sujet" type="text" class="form-control" name="sujet" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-6">
                                            <label for="contenu" class="customfont customweight little">Message</label>
                                            <textarea name="contenu" class="form-control" id="" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center mb-5">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-warning customfont customweight float-right">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-4">
                                <div class="customheight"></div>
                                <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                                    <a href="/file/DEBAERE Quentin - CV.pdf" target="_blank" class="customfont">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        <span>Voir mon CV</span>
                                    </a>
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