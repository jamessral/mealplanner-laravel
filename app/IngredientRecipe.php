<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientRecipe extends Model
{
    protected $fillable = [
        'ingredient_id',
        'recipe_id'
    ];
}
