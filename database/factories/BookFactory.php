<?php

namespace Database\Factories;
use App\Model\Book;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Book::class;

    public function definition()
    {
        $faker= \Faker\Factory::create();
        return [
            //
            'title'=>$faker->sentence(3),
            'author'=>$faker->name(),
            'publisher'=>$faker->company()
        ];
    }
}
