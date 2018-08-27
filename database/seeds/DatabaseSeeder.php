<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $people = factory(App\People::class, 150)->create();
        $articles = factory(App\Article::class, 25)->create();
        $articles = factory(App\Comment::class, 25)->create();
    }

    private function getRandomAuthorId()
    {
      $people = App\People::inRandomOrder()->first();
      return $people->id;
    }

    private function getRandomArticleId()
    {
      $article = App\Article::inRandomOrder()->first();
      return $article->id;
    }
}
