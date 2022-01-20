<?php

use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    // @return variant_mod

    public function run()
    {
        $comics = config('db.comics');

        foreach ($comics as $comic) {
            $_comic = new Comic();
            $_comic->title = $comic['title'];
            $_comic->description = $comic['description'];
            $_comic->thumb = $comic['thumb'];
            $_comic->price = $comic['price'];
            $_comic->series = $comic['series'];
            $_comic->save();
        }
    }
}