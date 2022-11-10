<?php

namespace Modules\Movie\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    protected $table = 'movie_category';

    public function movies()
    {

    }
}
