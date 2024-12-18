<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
   protected $model = State::class;
   
   public function definition(): array
    {
        return [
            'name'=> $this->faker->state,
            'countries_id'=>Country::inRandomOrder()->first()->id,
        ];
    }
}
