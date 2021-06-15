@extends('layouts.app')

@section('main_content')
    <h2>Aggiungi un albo</h2>
    <form action="{{ route('comics.store')}}" method="post">
      @csrf
      @method('POST')
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Serie">
        </div>
        <div class="form-group">
            <label for="title">Titolo albo</label>
            <input type="password" class="form-control" id="title" name="title" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="number">N.ro albo</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="pages">Numero pagine</label>
          <input type="number" class="form-control" id="pages" name="pages" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.10" class="form-control" id="price" name="price" placeholder="Password">
    </div>
        <div class="form-group">
            <label for="release_date">Data uscita</label>
            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="pic">Immagine di copertina</label>
            <input type="text" class="form-control" id="pic" name="pic" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>@endsection
