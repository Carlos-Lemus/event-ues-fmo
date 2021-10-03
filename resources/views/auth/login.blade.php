@extends('layouts.app')

@section('content')

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="container-wrap">
    <img class="bg-login" src="{{ asset('assets/images/login.png') }}" alt="background" />
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-11">
            <div class="card card-login">
                <p class="text-center h2 p-3">{{ __('Bienvenido') }}</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3 col-12 col-md-11 mx-auto">
                            <label for="email" class="form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-12 col-md-11 mx-auto">
                            <label for="password" class="form-label text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                         -->
                        <div class="form-group mb-3 col-12 col-md-11 mx-auto">
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">
                                {{ __('Iniciar Sesion') }}
                            </button>
                        </div>

                        <div class="form-group mb-3 col-12 col-md-11 mx-auto">
                            <div class="offset-3">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include("include.scripts");

@endsection
