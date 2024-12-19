<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    protected $model = City::class;

    public function definition(): array
    {
        return [
            'cityName'=>$this->faker->city(),
            'state_id'=>State::inRandomOrder()->first()->id,
        ];
    }
}
