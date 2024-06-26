<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->title() ,
            'pages' => fake()->numberBetween(45,400) ,
            'description' => fake()->text() ,
            'image' => fake()->imageUrl('C:\Users\alibe\OneDrive\Bureau\Designi\Logos\B&S_logo.png') ,
            'categorie_id' => fake()->numberBetween(1,10) ,
        ];
    }
}
