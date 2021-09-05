@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Contact')

@section('content')
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <div class="col-12 d-flex justify-content-center align-items-end mt-5 mb-5">
                                    <p class="customfont customweight title">CONTACT</p>
                                </div>
@foreach($sel as $user)
                                <form class="border-right" action="/contact-send" method="post">
                                    @csrf
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-8 col-lg-6">
                                            <label for="nom" class="customfont customweight little">Nom</label>
                                            <input id="nom" type="text" class="form-control" name="nom" value="{{$user->name}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-8 col-lg-6">
                                            <label for="email" class="customfont customweight little">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-8 col-lg-6">
                                            <label for="sujet" class="customfont customweight little">Sujet</label>
                                            <input id="sujet" type="text" class="form-control" name="sujet" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-8 col-lg-6">
                                            <label for="contenu" class="customfont customweight little">Message</label>
                                            <textarea name="contenu" class="form-control" id="" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center mb-5">
                                        <div class="col-8 col-lg-6">
                                            <button type="submit" class="btn btn-warning customfont customweight float-right">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
@endforeach
                            </div>
                        </div>
                    </div>
@endsection