<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    // Méthode index pour afficher la liste des films
    public function index()
    {
        // Liste des films avec titre, description et image
        $films = [
            ['title' => 'Film 1', 'description' => 'Description du film 1', 'image' => 'film1.jpg'],
            ['title' => 'Film 2', 'description' => 'Description du film 2', 'image' => 'film2.jpg'],
            ['title' => 'Film 3', 'description' => 'Description du film 3', 'image' => 'film2.jpg'],
            ['title' => 'Film 4', 'description' => 'Description du film 4', 'image' => 'film2.jpg'],
            ['title' => 'Film 5', 'description' => 'Description du film 5', 'image' => 'film2.jpg'],
            ['title' => 'Film 6', 'description' => 'Description du film 6', 'image' => 'film2.jpg'],
            ['title' => 'Film 7', 'description' => 'Description du film 7', 'image' => 'film2.jpg'],
            ['title' => 'Film 8', 'description' => 'Description du film 8', 'image' => 'film2.jpg'],
            ['title' => 'Film 9', 'description' => 'Description du film 9', 'image' => 'film2.jpg'],
        ];

        // Retourne la vue avec la liste des films
        return view('films.index', compact('films'));
    }
}
