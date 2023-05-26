<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Customer::class;
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            //
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ];
    }
}
