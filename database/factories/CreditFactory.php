<?php

namespace Database\Factories;

use App\Models\Credit;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class CreditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Credit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        
        return [
            'client_id' => Client::all()->random()->id,
            'admin_id' => null,
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'amount' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = -20000, $max = NULL),
            'relid' => null,
        ];
    }
}
