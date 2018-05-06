<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_recipes');
    }

    public function addIngredient(Ingredient $ingredient)
    {
        $this->ingredients()->attach($ingredient);
        return $this;
    }
}
