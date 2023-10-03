@extends('layouts.public')


@section('content')
    <div class="container py-5">
        <h2 class="fw-bold py-3 text-uppercase">Inserisci i dati del tuo nuovo fumetto</h2>

        <form action="{{ route('comics.store')}}" method="POST">
            @csrf()

            <div class="mb-3">
                <label class="form-labal">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" vlue="{{ old('title') }}">
                @error('title')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-labal">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" vlue="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-labal">Link immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" vlue="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-labal">Prezzo</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" vlue="{{ old('price') }}">
                @error('price')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-labal">Serie</label>
                <input type="text" class="form-control" name="series" vlue="{{ old('series') }}">
            </div>
            <div class="mb-3">
                <label class="form-labal">Data di uscita</label>
                <input type="date" class="form-control" name="sale_date" vlue="{{ old('sale_date') }}">
            </div>
            <div class="mb-3">
                <label class="form-labal">Tipo</label>
                <input type="text" class="form-control" name="type" vlue="{{ old('type') }}">
            </div>
            <div class="mb-3">
                <label class="form-labal">Disegnatori</label>
                <input type="text" class="form-control" name="artists" vlue="{{ old('artists') }}">
            </div>
            <div class="mb-3">
                <label class="form-labal">Scrittori</label>
                <input type="text" class="form-control" name="writers" vlue="{{ old('writers') }}">
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Indietro</a>
        </form>
    </div>
@endsection
