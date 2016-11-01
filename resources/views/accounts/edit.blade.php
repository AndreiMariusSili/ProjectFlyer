@extends('layout')

@section('content')
    <div class="row jumbotron">
        <p class="text-center">
            This is your account page. Here you can modify your account details and access all the flyers you have posted so far.
        </p>
    </div>
    

        <div class="row jumbotron">
            <div class="col-md-6 col-md-offset-3">
                <form action="/account" method="POST">
                    {!! csrf_field() !!}

                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name:</label>
                        <input class="form-control" type="text" name="name" value="{{$errors->has('name') ? old('name') : $user->name}}">

                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" value="{{$errors->has('email') ? old('email') : $user->email}}">

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone">Phone Number:</label>
                        <input class="form-control" type="text" name="phone" value="{{$errors->has('phone') ? old('phone') : $user->phone}}">

                        @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows=5 type="text" name="description">{{$errors->has('description') ? old('description') : $user->description}}</textarea>

                        @if($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">New Password:</label>
                        <input class="form-control" type="password" name="password">

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password Confirmation:</label>
                        <input class="form-control" type="password" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Account</button>
                </form>
            </div>
                
        </div>
    </form>

@endsection