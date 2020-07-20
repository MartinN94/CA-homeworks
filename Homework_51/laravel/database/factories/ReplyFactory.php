<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
use App\Reply;
use App\User;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first(),
        'post_id' => factory(Post::class),
        'body' => $faker->paragraph
    ];
});
