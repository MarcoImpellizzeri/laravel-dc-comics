@extends('layouts.public')


@section('content')
    <div class="container-current-series">
        <h3>CURRENT SERIES</h3>
    </div>
    <div class="comics-container">
        <div class="container my-5">
            <div class="row gy-4 pt-3">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <div class="img-container">
                                    <img src="{{ $comic->thumb }}" class="card-img" alt="{{ $comic->title }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                </div>
                            </a>
                            <div class="text-center">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                                <a href="#0" class="btn btn-danger">Elimina</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <button class="btn btn-primary mb-3 px-5 rounded-0">LOAD MORE</button>
            <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3 px-5 rounded-0 ms-3">AGGIUNGI FUMETTO</a>
        </div>
    </div>
@endsection
