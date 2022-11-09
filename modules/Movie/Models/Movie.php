<?php

namespace Modules\Movie\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Database\Factories\MovieFactory;

class Movie extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return MovieFactory::new();
    }

    public function scopeFilter($query, string $filter): void
    {
        $query
            ->where('title', 'like', "%$filter%");
    }
}
