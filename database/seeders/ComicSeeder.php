<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics_db');
        foreach ($comics as $comics_item) {
            $comic = new Comic();
            $comic->title = $comics_item['title'];
            $comic->description = $comics_item['description'];
            $comic->thumb = $comics_item['thumb'];
            $comic->price = $comics_item['price'];
            $comic->series = $comics_item['series'];
            $comic->sale_date = $comics_item['sale_date'];
            $comic->type = $comics_item['type'];
            $comic->artists = implode(',', $comics_item['artists']);
            $comic->writers = implode(',', $comics_item['writers']);
            $comic->save();
        }
    }
}
