<?php

use Illuminate\Support\Facades\Route;
use Modules\Movie\Controllers\MovieController;

Route::middleware(['web'])
    ->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('movies');
    });
