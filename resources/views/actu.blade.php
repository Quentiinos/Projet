@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Actualités')

@section('content')
                    <div class="col-12">
                        <div class="row h-100">
                            <div class="col-10 offset-1 h-25 mt-lg-5">
                                <div class="row d-flex justify-content-center justify-content-lg-between mt-5 align-items-center">
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
                                          <a href="{{$article->url}}" target="_blank" class="btn btn-warning float-right customfont mt-auto">Lire la suite</a>
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