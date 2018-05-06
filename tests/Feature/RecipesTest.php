<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Recipe;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RecipesTest extends TestCase
{
    use DatabaseMigrations;

    public function testItUserShouldSeeAllRecipes()
    {
        $recipes = factory(Recipe::class, 1)->create([]);

        $response = $this->get('/recipes');
        $response->assertSee($recipes[0]->name);
        $response->assertSee($recipes[0]->description);
        $response->assertStatus(200);
    }

    public function testUserShouldSeeSpecificRecipe()
    {
        $recipe = factory(Recipe::class)->create();

        $response = $this->get('/recipes/' . $recipe->id);
        $response->assertSee($recipe->name);
        $response->assertSee($recipe->description);
        $response->assertStatus(200);
    }
}
