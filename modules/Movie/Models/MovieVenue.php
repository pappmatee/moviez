<?php

namespace Modules\Movie\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Venue\Database\Factories\VenueFactory;
use Modules\Venue\Models\Opening;
use Modules\Venue\Models\Venue;

class MovieVenue extends Model
{
    use HasFactory;

    protected $table = 'movie_venue';
}
