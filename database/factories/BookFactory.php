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
            //
            "title"=>fake()->word(),
            "author"=>fake()->name(),
            "price"=>fake()->numberBetween(10, 30),
            "publication_date"=>fake()->date('Y-m-d', 'now'),
            "genre"=>fake()->randomElement(["sci_fi", "selfhelp", "adventure"]),
            "description"=>fake()->paragraph()
        ];
    }
}
