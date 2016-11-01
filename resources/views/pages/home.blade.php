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
        @foreach($flyers->chunk(4) as $set)
            <div class="row">
                @foreach($set as $flyer)
                    <div class="col-md-3 col-xs-6">
                        <a href="{{ flyer_path($flyer) }}">
                            <img src="{{ $flyer->photos()->exists() ? $flyer->photos->first()->thumbnail_path : 'images\home.png' }}" width="200" height="200">
                        </a>
                    </div>
                @endforeach
            </div>

            <hr>
        @endforeach
    </div>
@endsection