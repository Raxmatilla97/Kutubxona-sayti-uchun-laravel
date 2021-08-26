<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name' => $this->faker->randomElement($array = array ('Aniq fanlar', 'Tabiy fanlar', 'Gumanitar fanlar', 'Elektron resurslar')),
            'slug' => $this->faker->slug(),
            'has_active' => $this->faker->randomElement($array = array (1, 0)),
            
        ];
    }
}
