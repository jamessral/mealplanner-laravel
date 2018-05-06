<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{
    public function index(Recipe $recipe)
    {
        $recipes = Recipe::all();
        $data = [
            'recipes' => $recipes
        ];

        return view('recipes.index', $data);
    }

    public function show(Recipe $recipe)
    {
        $data = [
            'recipe' => $recipe
        ];

        return view('recipes.show', $data);
    }
}
