<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Model\Post;

class ComicSeeder extends Seeder
{
    // @return variant_mod

    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence();
            $post->body = $faker->paragraphs(10,true);
            $post->save();
        }
    }
}