<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Page des catégories
    public function index()
    {
        return view('categories'); // Affiche la vue des catégories
    }

    // Page spécifique à une catégorie
    public function show($theme)
    {
        // Vérifie si le thème est valide
        $validThemes = ['agdal', 'souissi','joulane']; // Liste des thèmes valides
        if (!in_array($theme, $validThemes)) { // Si le thème n'est pas valide
            abort(404); // Renvoie une erreur 404 si le thème est invalide
        }

        return view($theme); // Affiche la vue correspondant au thème demandé
    }
}

