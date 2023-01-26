@extends('layouts.app')

@section('content')
<div class="container">
    <img src="image/impostor3.png" alt="" style="position: absolute; margin-left: 60vw; width: 24vw">
    <div class="judul-register" style="font-family: 'Permanent Marker'; font-size: 6vw; position: absolute; z-index: 100; color: white; outline-color: #304eb6; margin-top: -5.6vw; margin-left: 12vw; ">Register</div>
    <div class="row" style="margin-top: 6vw; ">
        <div class="col-md-7" >
            <div class="card" style="background-color: #304eb6"  >
                <div class="card-head" style="height: 6vh">

                </div>

                <div class="card-body" style="height: 54vh">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-4">
                            <label for="name" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: 'outfit'; font-size: 1.7vw">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="margin-top: 0.5vw ; font-size: 1.2vw">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: 'outfit'; font-size: 1.7vw">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="margin-top: 0.5vw ; font-size: 1.2vw">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="margin-top: 0.5vw ; font-size: 1.2vw">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style="color: white; font-family: 'outfit'; font-size: 1.7vw; wid">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="margin-top: 0.5vw ; font-size: 1.2vw">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #f0f907; font-family: 'outfit'; font-weight: 800; width: 14vw ; height: 6vh; font-size: 1.5vw; margin-left: 3.5vw" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

</div>
@endsection
