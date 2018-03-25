<?php

    use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) use ($factory) {
    return [
         'title' => $faker->text,
         'description' => $faker->text,
         'user_id'  => $factory->create(App\User::class)->id
    ];
});
