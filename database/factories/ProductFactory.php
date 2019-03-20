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
      'talla_21'=> $faker->numberBetween(1, 10),
      'talla_22'=> $faker->numberBetween(1, 10),
      'talla_23'=> $faker->numberBetween(1, 10),
      'talla_24'=> $faker->numberBetween(1, 10),
      'talla_25'=> $faker->numberBetween(1, 10),
      'talla_26'=> $faker->numberBetween(1, 10),
      'talla_27'=> $faker->numberBetween(1, 10),
      'talla_28'=> $faker->numberBetween(1, 10),
      'talla_29'=> $faker->numberBetween(1, 10),
      'talla_30'=> $faker->numberBetween(1, 10),
      'talla_31'=> $faker->numberBetween(1, 10),
      'talla_32'=> $faker->numberBetween(1, 10),
      'talla_33'=> $faker->numberBetween(1, 10),
      'talla_34'=> $faker->numberBetween(1, 10),
      'talla_35'=> $faker->numberBetween(1, 10),
      'talla_36'=> $faker->numberBetween(1, 10),
      'talla_37'=> $faker->numberBetween(1, 10),
      'talla_38'=> $faker->numberBetween(1, 10),
      'talla_39'=> $faker->numberBetween(1, 10),
      'talla_40'=> $faker->numberBetween(1, 10),
      'total'=> $faker->randomNumber(3, $strict = false),

      'category_id' =>$faker->numberBetween(1, 5)

    ];
});
