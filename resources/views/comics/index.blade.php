@extends('layouts.app')

@section('main_content')
    <h2>FUMETTI</h2>
    <ul class="comics">
        @foreach ($comics as $comic)

            <li class="comic bg-main c-main">
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">

                    <img src="{{ $comic->pic }}" alt="">
                    <span>Uscita: {{ $comic->release_date }}</span>
                </a>
            </li>

        @endforeach

    </ul>
@endsection
