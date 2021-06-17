<header>
    {{-- div.header-head --}}
    <div class="header-head flexer between center-cross">
        <ul class="flexer center-cross">
            <li><a href=""><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-twitch"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
        </ul>
        <h1>EDIZIONI BOOLELLI</h1>
        <div class="search">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="search" required/>
                <button type="submit" class="btn btn-primary">ricerca</button>
            </form>
        </div>
    </div>
    {{-- END div.header-head --}}
    <nav>
        <ul class="flexer center">
            <li><a href="/">HOME</a></li>
            <li><a href="{{ route('comics.index') }}">FUMETTI</a></li>
            <li><a href="{{ route('comics.create') }}">CREA</a></li>
        </ul>

    </nav>
</header>
