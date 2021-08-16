@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'J\'adopte')

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
                                <div class="row d-flex justify-content-around">
                                    <div class="col-10 my-5 d-flex justify-content-end">{{$select->links()}}</div>
                                </div>
                            </div> 
                        </div>
                    </div>
@endsection