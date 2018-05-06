<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Ingredient;
use App\Recipe;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RecipesTest extends TestCase
{
    use DatabaseMigrations;

    public function testRecipesIngredients()
    {
        $ingredients = factory(Ingredient::class, 3)->create();

        $recipe = factory(Recipe::class)->create()
            ->addIngredient($ingredients[0])
            ->addIngredient($ingredients[1])
            ->addIngredient($ingredients[2]);

        $ingredientRecipes = $recipe->ingredients;

        $this->assertEquals(sizeof($ingredientRecipes), 3);
    }
}
