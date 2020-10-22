<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;


Route::get('/', [EventsController::class, 'index'])->name('home');

Route::resource('events', EventsController::class);


