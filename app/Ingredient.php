<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name', 'description', 'price'
    ];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'ingredients_recipes');
    }

    public function addToRecipe(Recipe $recipe)
    {
        $this->recipes()->attach($recipe);
        return $this;
    }
}
