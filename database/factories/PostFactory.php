<?php

use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->text,
        'user_id' => function () {
            return factory(App\User::class)->make()->id;
        },
        'cover_image' => 'public/cover_images/noimage.png'
    ];
});