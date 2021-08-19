@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'A propos')

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
                                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                                        <img src="/pictures/abandon.jpg" alt="" class="littlepicture">
                                    </div>
                                    <div class="col-12 col-lg-8 mt-5 mt-lg-0 d-flex justify-content-center justify-content-lg-start align-items-center customfont text">Lutter contre les abandons</div>
                                    <hr class="col-10 d-block d-lg-none">
                                </div>
                            </div>
                            <div class="col-10 offset-1 mb-5">
                                <div class="row">
                                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                                        <img src="/pictures/maltraite.jpg" alt="" class="littlepicture">
                                    </div>
                                    <div class="col-12 col-lg-8 mt-5 mt-lg-0 d-flex justify-content-center justify-content-lg-start align-items-center customfont text">Agir contre la maltraitance</div>
                                </div>
                            </div>
                            <div class="col-12 invisible d-block d-lg-none"></div>
                        </div>
                    </div>
@endsection