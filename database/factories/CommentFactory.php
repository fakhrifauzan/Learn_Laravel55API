<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
      'body' => $faker->text,
      'author_id' => function () {
        return factory(App\People::class)->create()->id;
      },
      'article_id' => function () {
        return factory(App\Article::class)->create()->id;
      }
    ];
});
