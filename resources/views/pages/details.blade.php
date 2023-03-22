@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('generate-pdf', ['download'=>'pdf'])}}"><button class="btn btn-primary">PDF Download</button></a>

    <div class="staff-table">
        <div class="container" id="table">
            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Employee Number ###</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->firstname}}</td>
                        <td>{{$data->lastname}}</td>
                        <td>{{$data->dof}}</td>
                        <td>{{$data->number}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection