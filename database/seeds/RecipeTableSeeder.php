<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Recipe::class, 20)->create();
    }
}
