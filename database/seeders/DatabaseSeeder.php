<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Category\Database\Seeders\CategorySeeder;
use Modules\Category\Models\Category;
use Modules\Movie\Database\Seeders\MovieSeeder;
use Modules\Movie\Models\Movie;
use Modules\Movie\Models\MovieCategory;
use Modules\Tag\Database\Seeders\TagSeeder;
use Modules\Tag\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory(20)
            ->create();

        $categories = Category::factory(3)
            ->hasTags(2)
            ->create();

        Movie::query()->each(function ($movie) {
            MovieCategory::query()->create([
                'movie_id' => $movie->id,
                'category_id' => fake()->numberBetween(1, 3)
            ]);
        });

        Tag::query()->each(function ($tag) {
            Tag::query()->create([
                'name' => $tag->name,
                'taggable_type' => 'Modules\Movie\Models\Movie',
                'taggable_id' => fake()->numberBetween(1, 20)
            ]);
        });

    }
}
