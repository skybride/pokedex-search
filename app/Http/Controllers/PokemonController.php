<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{

    public function searchPokemon(Request $request)
    {
        $pokemonName = $request->input('pokemon_name');
        
        if(!$pokemonName){
            return redirect()->route('fetch-pokemon');
        }

        $response = Http::get("https://pokeapi.co/api/v2/pokemon/${pokemonName}");

        if($response->failed()){
            // return redirect()->route('fetch-pokemon')->with('error', 'Pokémon not found');
            return view('error');
        }
        $pokemonData = $response->json();

        return view('pokemons.pokemon', compact('pokemonData'));
    }

    public function fetchPokemon()
    {
        $pokemonName = 'pikachu'; // Change this to the desired Pokemon name
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemonName}");

        $pokemonData = $response->json();

        return view('pokemons.pokemon', compact('pokemonData'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pokemons.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
