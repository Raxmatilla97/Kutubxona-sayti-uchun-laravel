<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'url' => $this->faker->slug(),
            'has_active' => $this->faker->randomElement($array = array (1, 0)),
            'category_id' => '1',
            'subcategory_id' => '1',
            'user_id' => '1',

        ];
    }
}
