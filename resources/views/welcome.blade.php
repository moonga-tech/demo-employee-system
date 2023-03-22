@extends('layouts.app')

@section('page_title', 'Home | Welcome')

@section('content')
<div class="banner">
    <div class="text-center banner-content">
        <div>
            <h1>Employee Online System</h1><br>
        </div>
        <p>This will help us keep the records for easy quering or access to our board members and Technicians.</p>

        @guest
        @if (Route::has('login'))
        <a class="nav-link" href="{{ route('login') }}"><button type="click" class="btn btn-outline-secondary" style="width: 20%; padding: .5em 13px; font-size:18px">Login</button></a>
        @endif
        @else
        <h4 class="text-warning">
            Welcome to Our System
        </h4>
        @endguest
    </div>
</div>
@endsection