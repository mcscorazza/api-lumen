<?php

namespace Database\Factories;

use App\Models\Sensors;
use Illuminate\Database\Eloquent\Factories\Factory;

class SensorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sensors::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sensorType' => $this->faker->sentence,
            'value' => $this->faker->randomFloat(2,0,10),
        ];
    }
    
}
