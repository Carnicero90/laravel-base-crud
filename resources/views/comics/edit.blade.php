@extends('layouts.app')

@section('main_content')
@dump($comic)
    <h2>Aggiungi un albo</h2>
    {{-- error handler --}}
    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            @dump($errors)

        </ul>
        
    @endif
    {{-- END error handler --}}
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
        </div>
        <div class="form-group">
            <label for="title">Titolo albo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="form-group">
            <label for="number">N.ro albo</label>
            <input type="number" class="form-control" id="number" name="number" value="{{ $comic->number }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $comic->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="pages">Numero pagine</label>
            <input type="number" class="form-control" id="pages" name="pages" value="{{ $comic->pages }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.10" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="form-group">
            <label for="release_date">Data uscita</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $comic->date }}">
        </div>
        <div class="form-group">
            <label for="pic">Immagine di copertina</label>
            <input type="text" class="form-control" id="pic" name="pic" value="{{ $comic->pic }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>@endsection