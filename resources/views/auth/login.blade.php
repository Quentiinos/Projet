@extends('layouts.app')
@extends('layouts.footer')
@section('title', 'Connexion')

@section('content')
    <div class="col-12 h-100">
        <div class="row h-100">
            <div class="col-6 h-100">
                <div class="col-12 d-flex justify-content-center align-items-end mb-5 h-25">
                    <span class="customfont customweight title">Connexion</span>
                </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-6">
                                <label for="email" class="customfont customweight little">E-Mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label customfont little" for="remember">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center">
                            <div class="col-6">
                                <button type="submit" class="col-12 btn btn-warning customfont customweight moyen">
                                    Se connecter
                                </button>

                                {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}

                            </div>
                        </div>
                    </form>

            </div>
            <div class="col-6 h-100 border-left">
                <div class="col-12 h-25 d-flex justify-content-center align-items-end mb-5 customfont customweight title">Inscription</div>
                <div class="col-12 d-flex justify-content-center">
                    <a class="col-6" href="{{ route('register') }}"><button type="button" class="btn btn-warning col-12 customfont customweight moyen">S'inscrire</button></a>    
                </div>
            </div>
        </div>
    </div>
@endsection
