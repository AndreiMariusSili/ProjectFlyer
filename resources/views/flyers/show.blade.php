@extends('layout');

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h1>{{ $flyer->street }}</h1>
            <h2>{{ $flyer->price }}</h2>

            <hr>

            <div class="description">
                {!! $flyer->description !!}
            </div>

            <hr>

        </div>
        <div class="col-md-6">
            @foreach($flyer->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div class="col-xs-3">
                            <a href="/{{ $photo->path }}" data-lity>
                                <img src="/{{ $photo->thumbnail_path }}" alt="" class="img-responsive thumb">    
                            </a>
                            @if ($user && $user->owns($flyer))
                                <form action="/photos/{{$photo->id}}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="DELETE">

                                    <button type="submit" class="btn btn-block tn-delete">&times;</button>
                                </form>
                            @endif
                        </div>
                    @endforeach
                </div>

                <hr>

            @endforeach


            @if ($user && $user->owns($flyer))
                <h2>Add your photos:</h2>

                <form id="addPhotosForm"
                      action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}"
                      method="POST"
                      class="dropzone dropzon-custom"
                >
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </div>
@endsection