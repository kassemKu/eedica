<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'title' => $name,
        'slug' => str_slug($name),
        'user_id' => $faker->numberBetween(1, 10),
        'description' => $faker->text,
        'price' => $faker->randomNumber(2),
        'course_start' => $faker->dateTimeThisCentury($max = 'now', $timezone = null),
        'publish' => rand(0,1),
        'free_course' => rand(0,1)
    ];
});

