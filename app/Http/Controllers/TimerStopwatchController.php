<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimerStopwatchController extends Controller
{
    // Method for the home page
    public function home()
    {
        return view('home');
    }

    // Method for the stopwatch page (inside resources/views/stopwatch/stopwatch.blade.php)
    public function stopwatch()
    {
        return view('stopwatch.stopwatch');  // Updated path
    }

    // Method for the timer page (inside resources/views/timer/timer.blade.php)
    public function timer()
    {
        return view('timer.timer');  // Updated path
    }
}
