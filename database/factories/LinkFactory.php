<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory -> define(Link::class, function (Faker $faker){
    return[
        'title' =>substr($faker->sentence(2),0,-1),
        'url' => $faker -> url,
        'description'=>$faker->paragraphs,
    ];

});

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

