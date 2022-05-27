@extends('template')

@section('content')

    <form action="{{ url('/register') }}" style="margin: 100px" method="POST">
        {{csrf_field()}}

        <fieldset>
            <legend>Register</legend>
            <div class="form-group">
                <label for="name" class="form-label mt-4">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="email" class="form-label mt-4">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="mail@mail.com">
            </div>
            <div class="form-group">
                <label for="password" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="profession" class="form-label mt-4">Profession</label>
                <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession">
            </div>
            <div class="form-group">
                <label for="address" class="form-label mt-4">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>

            <div class="text-center">
            <button type="submit" class="btn btn-primary">Register</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-dismissible alert-danger">
                    {{$errors->first()}}
                </div>
            @endif
        </fieldset>
    </form>

@endsection
