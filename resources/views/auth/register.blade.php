@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Inscription')

@section('content')
<div class="col-12 h-100">
    <div class="row justify-content-center h-100">
        <div class="col-10 h-100">
            <div class="col-12 d-flex h-25 justify-content-center align-items-end mb-5 customfont customweight title">Inscription</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-6">
                            <label for="name" class="customfont customweight little">Nom</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-6">
                            <label for="email" class="customfont customweight little">E-Mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-6">
                            <label for="password" class="customfont customweight little">Mot de passe</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-6">
                            <label for="password-confirm" class="customfont customweight little">Confirmation</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-6">
                            <button type="submit" class="col-12 btn btn-warning customfont customweight moyen mt-3">
                                S'inscrire
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
