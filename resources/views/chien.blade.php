@extends('layouts.app')
@extends('layouts.footer')

@section('title')
    @foreach($select as $dog)
        {{$dog->name}}
    @endforeach
@endsection

@section('content')
@foreach($select as $dog)
                    <div class="col-10 offset-1 mt-5">
                        <div class="row h-100">
                            <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <img src="{{$dog->url_picture}}" alt="{{$dog->name}}" class="card-img-top rounded-0 rounded-left">
                                    </div>
                                    <div class="col-3 bg-warning">
                                        <div class="row">
                                            <span class="col-12 text-center mt-3 title customfont customweight">{{$dog->name}}</span>
                                            <div class="col-12 mt-5 text-center">
                                                <div class="row">
                                                    <span class="col-12 moyen customfont customweight">Âge</span>
                                                    <span class="col-12 moyen customfont">{{$dog->age}} @if(($dog->age) <= 1) an @else ans @endif</span>    
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3 text-center">
                                                <div class="row">
                                                    <span class="col-12 moyen customfont customweight">Sexe</span>
                                                    <span class="col-12 moyen customfont">{{$dog->sexe}}</span>    
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3 text-center">
                                                <div class="row">
                                                    <span class="col-12 moyen customfont customweight">Race</span>
                                                    <span class="col-12 moyen customfont">{{$dog->race}}</span>    
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3 text-center">
                                                <div class="row">
                                                    <span class="col-12 moyen customfont customweight">Naissance</span>
                                                    <span class="col-12 moyen customfont">{{$dog->naissance}}</span>    
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3 text-center">
                                                <div class="row">
                                                    <span class="col-12 moyen customfont customweight">Castré / Stérilisé</span>
                                                    <span class="col-12 moyen customfont">@if(($dog->castre) == 0) Non @else Oui @endif</span>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="row">
                                    <span class="customfont customweight moyenplus">HISTOIRE</span>
                                    <hr class="col-12">
                                    <p class="customfont little"></p>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <span class="customfont customweight moyenplus">CARACTÈRE</span>
                                    <hr class="col-12">
                                    <p class="customfont moyen">{{$dog->caractere}}</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3 mb-5">
                                <div class="row">
                                    <span class="customfont customweight moyenplus">REFUGE</span>
                                    <hr class="col-12">
                                    <p class="customfont little"></p>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
@endsection