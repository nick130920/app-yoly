<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name'=> substr($faker->sentence(3), 0, -1),
      'description'=> $faker->sentence(5),
      'long_description'=> $faker->text,
      'price'=> $faker->randomFloat(5, 30000, 160000),
      'reference'=> $faker->randomNumber(3, $strict = false),

      'category_id' =>$faker->numberBetween(1, 5)

    ];
});
