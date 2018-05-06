<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Recipe;
use App\Ingredient;

class IngredientsTest extends TestCase
{
    use DatabaseMigrations;

    public function testRecipeIngredients()
    {
        $recipes = factory(Recipe::class, 3)->create();

        $ingredient = factory(Ingredient::class)->create()
            ->addToRecipe($recipes[0])
            ->addToRecipe($recipes[1])
            ->addToRecipe($recipes[2]);

        $ingredientRecipes = $ingredient->recipes;

        $this->assertEquals(sizeof($ingredientRecipes), 3);
    }
}
