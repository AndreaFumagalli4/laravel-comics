@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="mb-5 text-center">
                        <div class="image-container">
                            <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="Comic thumb">
                        </div>
                        <div class="description">
                            <p>
                                {{ $comic['series'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection