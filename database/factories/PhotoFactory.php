<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'user_id' => function (array $input) {
            return $input['user_id'];
        },
        'path' => $faker->imageUrl(320),
        'order' => $faker->numberBetween(0, 3)
    ];
});
