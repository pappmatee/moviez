<?php

namespace Modules\Movie\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Models\Category;
use Modules\Movie\Database\Factories\MovieFactory;
use Modules\Tag\Models\Tag;
use Modules\Venue\Models\Venue;

class Movie extends Model
{
    use HasFactory;

    public function venues()
    {
        return $this->belongsToMany(Venue::class)->using(MovieVenue::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'movie_category');
    }

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    protected static function newFactory()
    {
        return MovieFactory::new();
    }
}
