<?php

namespace Database\Factories;
use App\Models\Questions;
use App\Models\Forums;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class QuestionsFactory extends Factory
{
    protected $model = Questions::class;
    public function definition()
    {
        $faker = \Faker\Factory::create();
        
        return [

            "content" =>    $faker->sentence(),
            'forums_id'=>    Forums::inRandomOrder()->first()->id,
        ];
    }
}
