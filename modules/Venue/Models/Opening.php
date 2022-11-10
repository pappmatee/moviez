<?php

namespace Modules\Venue\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Venue\Database\Factories\OpeningFactory;

class Opening extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return OpeningFactory::new();
    }
}
