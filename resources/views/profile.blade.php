@extends('template')

@section('content')
    <h1 style="text-align: center; margin-top: 20px">Your Profile</h1>
    <div class="row" style="justify-content:space-evenly; margin: 100px">
        <div class="card" style="text-align: center">
{{--        <div class="card-header" style="text-align: center">Profile</div>--}}

        <div class="card-body">
            <h4 class="card-title" style="text-align: center">Hello, @if(auth()->check()) {{auth()->user()->name}} @endif !</h4>
            <p class="card-text" style="text-align: center">Changing profile currently is not available yet sorry!</p>
            <br/>
            <p class="card-text">
            <p class="card-text">Profession: {{$profile->profession}}</p>
            <p class="card-text">Address: {{$profile->address}}</p>

            </p>
        </div>
    </div>
    </div>

@endsection
