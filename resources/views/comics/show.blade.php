@extends('layouts.app')

@section('main_content')
<h2 class="c-main">{{ $comic->title }}</h2>
  <ul class="comics">
    <li class="comic flexer">
        <img src="{{ $comic->pic }}" alt="">
        <div class="details bg-main c-main">
            <span>{{ $comic->series }} N°: {{ $comic->number }}</span>
            <h3>{{ $comic->title }} </h3>
            <p class="description">
                {{ $comic->description }}
            </p>
            <span>Pagine: {{ $comic->pages }}</span>
            <span class="price">Prezzo: {{ $comic->price }}</span>
            <span>Uscita: {{ $comic->release_date }}</span>
            <a href="{{ route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-primary">EDIT</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" onclick="confirm('Sicuro sicuro?')" class="btn btn-danger" value="Cancella">
            </form>
        </div>
    </li>
  </ul>
@endsection