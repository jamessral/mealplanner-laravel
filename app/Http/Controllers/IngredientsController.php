<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;

class IngredientsController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        $data = [
            'ingredients' => $ingredients
        ];
        return view('ingredients.index', $data);
    }

    public function show(Ingredient $ingredient)
    {
        $data = [
            'ingredient' => $ingredient
        ];

        return view('ingredients.show', $data);
    }
}
