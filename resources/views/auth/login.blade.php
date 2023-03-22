@extends('layouts.app')

@section('content')
<div class="container">
    <div class="signs-box">
        <div class="form-div">
            <form method="POST" action="" class="admin-login-form">
                @csrf
                <div class="text-center">
                    <h1>{{ __('Login') }}</h1>
                </div>
                <div class="container-fluid form-group">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email-Address" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-fluid form-group">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror form-control" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row mb-0 btn-login">

                    <div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg mr-2">
                                {{ __('Login') }}
                            </button> <br>
                        </div>

                        <!-- <div class="forgot-remember">
                            <div class="remember-me">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="forgot-pass">
                            @if (Route::has('password.request'))
                                    <a class="text-link lead text-decoration-none text-info" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </div> -->
                    </div>

                    <div class="already-have-account text-center">
                        <label for="register">Don't have an account? </label>
                        <a href="{{ route('register') }}" class="lead text-info">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection