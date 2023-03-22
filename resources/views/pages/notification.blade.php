@extends('layouts.app')
@section('page_title', 'Notification')
@section('content')
<div class="container">
    <div class="alert alert-success" style="width: 50%"> 
        <a href="{{route('url-SD')}}">Go to Dashboard</a>
        <p class="text-warning">{{ session('mssg') }}</p>
    </div>
</div>
@endsection