<?php

namespace Database\Factories;

use App\Models\Tv;
use Illuminate\Database\Eloquent\Factories\Factory;

class TvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tv::class;

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
            'legs'               => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'keys'               => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'inches'             => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'control'            => $this->faker->randomDigitNot(2,4,5,6,7,8,9),
            'description'        => $this->faker->text($maxNbChars = 200), 
            'comment'            => $this->faker->text($maxNbChars = 100), 
            'available'          => $this->faker->randomDigitNot(2,4,5,6,7,8,9), 
        ];
    }
}
