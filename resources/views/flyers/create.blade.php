@extends('layout')

@section('content')
    <h1>Selling your home?</h1>

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/flyers" method="POST" enctype="multipart/form-data">
                @include('flyers.form')
            </form>
@endsection