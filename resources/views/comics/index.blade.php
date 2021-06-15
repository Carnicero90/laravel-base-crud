@extends('layouts.app')

@section('main_content')
<h2>FUMETTI</h2>
  <ul class="comics">
    @foreach ($comics as $comic)
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
        </div>
    </li>
        
    @endforeach

  </ul>
@endsection