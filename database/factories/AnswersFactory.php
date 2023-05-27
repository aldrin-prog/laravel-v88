<?php

namespace Database\Factories;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class AnswersFactory extends Factory
{
    protected $model = Answers::class;
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            "content" =>    $faker->sentence(),
            'questions_id'=>    Questions::inRandomOrder()->first()->id,
        ];
    }
}
