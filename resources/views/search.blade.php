@extends('layouts.app')

@section('main_content')
@if (count($results))
    
<h2>RISULTATI RICERCA</h2>
<ul class="comics">
    @foreach ($results as $comic)

        <li class="comic bg-main c-main">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">

                <img src="{{ $comic->pic }}" alt="">
                <span>Uscita: {{ $comic->release_date }}</span>
            </a>
        </li>

    @endforeach

</ul>
@else
<p class="c-main">Nessun risultato :(</p>
@endif  
    
    
    
@endsection