<!DOCTYPE html>
<html>
<head>
    <title>Pokemon Details</title>
</head>
<body>
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form action="{{ route('search-pokemon') }}" method="GET">
        <input type="text" name="pokemon_name" placeholder="Enter Pokemon Name">
        <button type="submit">Search</button>
    </form>

    @if(isset($pokemonData))
        <h1>{{ $pokemonData['name'] }}</h1>
        <img src="{{ $pokemonData['sprites']['front_default'] }}" alt="{{ $pokemonData['name'] }}">

        <h2>Abilities</h2>
        <ul>
            @foreach ($pokemonData['abilities'] as $ability)
                <li>{{ $ability['ability']['name'] }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
