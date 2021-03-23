<?php

namespace Database\Factories;

use App\Models\Xbox;
use Illuminate\Database\Eloquent\Factories\Factory;

class XboxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Xbox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'              => $this->faker->word, 
            'model'              => $this->faker->word, 
            'color'              => $this->faker->colorName, 
            'accessories'        => $this->faker->word, 
            'generation'         => $this->faker->randomDigitNot(0,9), 
            'control'            => $this->faker->randomDigitNot(0,9), 
            'games'              => $this->faker->randomDigitNot(0,9), 
            'launch'              => $this->faker->randomDigitNot(0,9),
            'description'        => $this->faker->text($maxNbChars = 200), 
            'comment'            => $this->faker->text($maxNbChars = 100), 
            'available'          => $this->faker->randomDigitNot(2,4,5,6,7,8,9), 
        ];
    }
}
