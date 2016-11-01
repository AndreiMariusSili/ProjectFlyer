@extends('layout')

@section('content')

    <div class="row jumbotron">
        <h1>Welcome to Project Flyer!</h1>
        <p>
            With this app you can interact with other home owners that are willing to sell their home.
            @if($signedIn)
                Browse the section below to see what homes are available for sale.
            @else
                You can also create an account (or login if you already have one) to post a flyer.
            @endif
        </p>

        @if($signedIn)
            <a href="flyers/create " class="btn btn-primary">Create a Flyer</a>
            <a href="logout" class="btn btn-primary">Logout</a>
        @else
            <a href="register " class="btn btn-primary">Register</a>
            <a href="login" class="btn btn-primary">Login</a>
        @endif
    </div>
    <div class="row jumbotron">
        
    </div>
@endsection