<?php

namespace Modules\Venue\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Venue\Models\Venue;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Venue\Models\Venue>
 */
class VenueFactory extends Factory
{
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(1, true),
        ];
    }
}
