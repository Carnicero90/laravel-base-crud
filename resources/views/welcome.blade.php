@extends('layouts.app')

@section('main_content')
    <h2>FUMETTI</h2>
    <a href="{{ route('comics.index') }}" style="border: 1px solid red; padding: 5px;">
        {{-- TODO sposta in header --}}
        link a pag fumetti da mettere poi in header
    </a>


    </ul>
@endsection
