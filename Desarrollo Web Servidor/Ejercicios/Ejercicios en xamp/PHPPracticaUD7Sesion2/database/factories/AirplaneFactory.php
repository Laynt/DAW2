<?php

namespace Database\Factories;

use App\Models\Airplane;
use Illuminate\Database\Eloquent\Factories\Factory;

class AirplaneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Airplane::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {       
        return [            
            'serial'  => $this->faker->ean8,            
            'model'  => $this->faker->word,         
            'length'  => $this->faker->randomFloat(2, 10, 500),                        
            'capacity'  => $this->faker->numberBetween(1, 1000),            
            'speed'  => $this->faker->randomFloat(2, 100, 3000),            
            'range'  => $this->faker->numberBetween(100, 100000)            
        ];
    }

}
