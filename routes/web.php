<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimerStopwatchController;

// Route for the home page
Route::get('/', [TimerStopwatchController::class, 'home'])->name('home');

// Route for the stopwatch page
Route::get('/stopwatch', [TimerStopwatchController::class, 'stopwatch'])->name('stopwatch');

// Route for the timer page
Route::get('/timer', [TimerStopwatchController::class, 'timer'])->name('timer');
