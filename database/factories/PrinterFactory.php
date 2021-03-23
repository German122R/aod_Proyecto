<?php

namespace Database\Factories;

use App\Models\Printer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrinterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Printer::class;

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
            'connectivity'       => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'printcolor'         => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'resolution'         => $this->faker->randomDigitNot(0,1,3,5,7,9), 
            'speed'              => $this->faker->randomDigitNot(2,4,5,6,7,8,9),
            'pagesperminute'     => $this->faker->randomDigitNot(0,9), 
            'keys'              => $this->faker->randomDigitNot(0,9), 
            'description'        => $this->faker->text($maxNbChars = 200), 
            'comment'            => $this->faker->text($maxNbChars = 100), 
            'available'          => $this->faker->randomDigitNot(2,4,5,6,7,8,9), 
        ];
    }
}
