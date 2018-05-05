<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Ingredient;

class IngredientsTest extends TestCase
{
    use DatabaseMigrations;

    public function testUserShouldSeeAllIngredients()
    {
        $ingredients = factory(Ingredient::class, 1)->create();

        $response = $this->get('/ingredients');
        $response->assertSee($ingredients[0]->name);
        $response->assertSee($ingredients[0]->description);
        $response->assertSee($ingredients[0]->price);
        $response->assertStatus(200);
    }

    public function testUserShouldSeeSpecificIngredient()
    {
        $ingredient = factory(Ingredient::class)->create([]);

        $response = $this->get('/ingredients/' . $ingredient->id);

        $response->assertSee($ingredient->name);
        $response->assertSee($ingredient->description);
        $response->assertSee($ingredient->price);
        $response->assertStatus(200);
    }
}
