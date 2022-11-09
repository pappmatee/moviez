<?php

namespace Modules\Movie\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Movie\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory(500)->create();
    }
}
