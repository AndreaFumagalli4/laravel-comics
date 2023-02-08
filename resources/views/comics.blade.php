@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="">
                        <div class="description">
                            <h3>
                                {{ $comic['title'] }}
                            </h3>
                            <p>
                                {{ $comic['series'] }}
                            </p>
                            <p>
                                {{ $comic['price'] }} &dollar;
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection