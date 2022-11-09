<?php

namespace Modules\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Database\Factories\CategoryFactory;
use Modules\Movie\Models\Movie;
use Modules\Tag\Models\Tag;

class Category extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_category');
    }

    public function tags()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
