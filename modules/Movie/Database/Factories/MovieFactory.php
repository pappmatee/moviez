<?php

namespace Modules\Movie\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Movie\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Movie\Models\Movie>
 */
class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'title' => fake()->name(),
        ];
    }
}
