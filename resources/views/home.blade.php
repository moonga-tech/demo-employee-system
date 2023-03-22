@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <span class="text-dark">{{ __('You are logged in!') }}</span>
                    <h3><a href="{{route('storeDetails')}}">Store Details</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection