<?php

namespace Database\Factories;
use App\Models\Forums;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class ForumsFactory extends Factory
{
    protected $model = Forums::class;
    public function definition()
    {
        $faker = \Faker\Factory::create();
        
        return [
            "title" => $faker->sentence(5),
            "description"=> $faker->paragraph(3)
        ];
    }
}
