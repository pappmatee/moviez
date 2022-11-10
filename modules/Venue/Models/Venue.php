<?php

namespace Modules\Venue\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Models\MovieVenue;
use Modules\Venue\Database\Factories\VenueFactory;

class Venue extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->belongsToMany(MovieVenue::class, 'movie_venue');
    }

    protected static function newFactory()
    {
        return VenueFactory::new();
    }
}
