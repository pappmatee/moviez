<?php

namespace Modules\Category\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\Movie\Livewire\MoviesTable;


class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
