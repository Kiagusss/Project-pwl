@extends('layouts.app')

@section('content')
<div class="container">
    <img src="image/impostor4.webp" alt="" style="position: absolute; margin-left: 55vw; width: 30vw">
    <div class="judul-register" style="font-family: 'Permanent Marker'; font-size: 6vw; position: absolute; z-index: 100; color: white; outline-color: #304eb6; margin-left: 16vw; margin-top: 2vw">Login</div>image/impostor4.webp
    <div class="row" style="margin-top: 6vw; ">
        <div class="col-md-7">
            <div class="card" style="background-color: #304eb6" >
                <div class="card-head" style="height: 6vh"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: 'outfit'; font-size: 1.7vw">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  style="margin-top: 0.5vw ; font-size: 1.2vw">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: 'outfit'; font-size: 1.7vw">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  style="margin-top: 0.5vw ; font-size: 1.2vw">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 1.5vw; height: 3vh;">

                                    <label class="form-check-label" for="remember" style="font-size: 1.4vw; margin-top: 0.1vw; margin-left: 1vw; font-family: 'outfit'; color: white">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-size: 1.4vw; font-weight: 600; font-family: 'outfit'">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 1vw; color: yellow">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="garis-login d-flex" style="margin-top: 2vw; margin-left: 15vw">
                        <div class="garis1" style="width: 3vw; height: 1.2px; background-color: black; margin-top: 0.45vw;"></div>
                        <h1 class="" style="font-size: 0.8vw; font-weight: 800; margin-left: 0.5vw">Login With Other Account</h1>
                        <div class="garis2" style="width: 3vw; height: 1.2px; background-color: black; margin-top: 0.45vw; margin-left: 0.5vw"></div>
                    </div>
                    <div class="login-google" style="margin-top: 1vw; margin-left: 16.5vw">
                        <a href="{{ url('login/google') }}" class="btn" style="background: white ; font-size: 1vw; font-weight: 700; ">Login With Google<img src="image/google-logo.png" alt="" style="width: 2vw; margin-left: 1vw;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
