@extends('layouts.app')
@section('content')
<style>
        .storeDetails {
            margin:1em auto;
            width:30em;
        }
        .storeDetails input {
            margin:0 0 2em 0;
        }
    </style>
<div class="container">
    
    <form action="" method="post" class="storeDetails">
        @csrf
        <label for="">First Name</label>
        <input type="text" name="firstname" placeholder="first-name" class="form-control">

        <label for="">Last Name</label>
        <input type="text" name="lastname" placeholder="last-name" class="form-control">

        <label for="">Date Of Birth</label>
        <input type="date" name="dof" id="" placeholder="date-of-birth" class="form-date">

        <br>
        <label for="">Employee Number</label>
        <input type="number" name="number" id="" placeholder="employee-number...." class="form-control">

        <div class="text-center">
        <button type="submit" class="btn btn-outline-primary" style="width:10em">Submit</button>
        </div>
    </form>
</div>
@endsection