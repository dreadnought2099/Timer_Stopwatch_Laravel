<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stopwatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'elapsed_time',
        'is_running'
    ];
}
