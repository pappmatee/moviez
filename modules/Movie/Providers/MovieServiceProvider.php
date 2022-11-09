<?php

namespace Modules\Movie\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\Movie\Livewire\MoviesTable;


class MovieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        Livewire::component('core-movie-movies-table', MoviesTable::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/route.php');
    }
}
