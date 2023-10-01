@extends('layouts.public')


@section('content')
    <div class="comics-container">
        <div class="container my-5">
            <div class="row gy-4 pt-3">
                @foreach($home as $comic)
                    <div class="col-2">
                        <div class="card">
                            <a href="#0">
                                <div class="img-container">
                                    <img src="{{ $comic['thumb'] }}" class="card-img" alt="{{ $comic['title'] }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic['series'] }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <button class="btn btn-primary mb-3 px-5 rounded-0">LOAD MORE</button>
        </div>
    </div>
@endsection