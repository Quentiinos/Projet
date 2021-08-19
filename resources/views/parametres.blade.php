@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Profil')




@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="col-12 d-flex justify-content-center align-items-end mt-5 mb-5">
                <p class="customfont customweight title text-center">INFORMATIONS PERSONNELLES</p>
            </div>
@foreach($sel as $user)
            <form action="/param-send" method="post">
                @csrf
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-3">
                        <label for="nom" class="customfont customweight little">Nom</label>
                        <input id="nom" type="text" class="form-control" value="{{$user->name}}" name="nom" required>
                    </div>
                    <div class="col-3">
                        <label for="prenom" class="customfont customweight little">Prénom</label>
                        <input id="prenom" type="text" class="form-control" value="{{$user->surname}}" name="prenom" required>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-3">
                        <label for="naissance" class="customfont customweight little">Date de naissance</label>
                        <input id="naissance" type="date" class="form-control" value="{{$user->birth}}" name="naissance" required>
                    </div>
                    <div class="col-3">
                        <label for="sexe" class="customfont customweight little">Sexe</label>
                        <select name="sexe" id="sexe" value="{{$user->sexe}}" class="form-control">
                            
                            @if($user->sexe == "homme")
                            <option value="homme" selected>Homme</option>
                            <option value="femme">Femme</option>
                            @elseif($user->sexe == "femme")
                            <option value="homme">Homme</option>
                            <option value="femme" selected>Femme</option>
                            @else
                            <option value="" selected disabled hidden></option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-6">
                        <label for="email" class="customfont customweight little">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-6">
                        <label for="tel" class="customfont customweight little">Téléphone</label>
                        <input id="tel" type="text" class="form-control" name="tel" value="{{$user->phone}}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-6">
                        <label for="adresse" class="customfont customweight little">Adresse</label>
                        <input id="adresse" type="text" class="form-control" name="adresse" value="{{$user->adress}}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-6">
                        <label for="compadresse" class="customfont customweight little">Complément d'adresse</label>
                        <input id="compadresse" type="text" class="form-control" name="compadresse" value="{{$user->compadress}}">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-3">
                        <label for="ville" class="customfont customweight little">Ville</label>
                        <input id="ville" type="text" class="form-control" value="{{$user->city}}" name="ville">
                    </div>
                    <div class="col-3">
                        <label for="codepostal" class="customfont customweight little">Code postal</label>
                        <input id="codepostal" type="text" class="form-control" value="{{$user->zip}}" name="codepostal">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center mb-5">
                    <div class="col-6">
                        <button type="submit" class="btn btn-warning customfont customweight float-right">Envoyer</button>
                    </div>
                </div>
                <div class="col-12 invisible d-block d-lg-none"></div>
            </form>
@endforeach
        </div>
    </div>
</div>
@endsection