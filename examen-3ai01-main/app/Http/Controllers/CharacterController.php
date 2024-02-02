<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function index()
    {
        // Fetch data from the Rick and Morty API
        $response = Http::get('https://rickandmortyapi.com/api/character');

        // Decode the JSON response
        $characters = $response->json()['results'];

        // Return the view with the fetched data
        return view('characters.index', compact('characters'));
    }
}
