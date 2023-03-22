@extends('layouts.app')

@section('content')
<div class="container">
    <div class="signs-box">
        <div class="form-div container-fluid">
            <form method="POST" action="{{ route('register') }}" class="admin-login-form">
                @csrf
                <div class="text-center">
                    <h1>{{ __('Register') }}</h1>
                </div>
                <div class="container-fluid form-group">
                    <input id="name" type="text" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                    @error('name')
                    <span class=" invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-fluid form-group">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email-Address">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-fluid form-group">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror form-control" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-fluid form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <div class="form-group row mb-0 btn-login">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg mr-2">
                            {{ __('Sign Up') }}
                        </button> <br>
                    </div>
                </div>

                <div class="already-have-account text-center">
                    <label>Already have an account? </label>
                    <a href="{{ route('login') }}" class="lead text-info">Log In</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection