@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card mb-5 text-center">
                    <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="Comic thumb">
                    <div class="description">
                        <h5>
                            {{ $comic['title'] }}
                        </h5>
                        <p>
                            {{ $comic['series'] }}
                        </p>
                        <p>
                            {{ $comic['price'] }} 
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection