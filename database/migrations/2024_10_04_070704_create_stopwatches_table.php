<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopwatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stopwatches', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->nullable(); // Name for the stopwatch (optional)
            $table->integer('elapsed_time')->default(0)->comment('Elapsed time in milliseconds'); // Time recorded
            $table->boolean('is_running')->default(false); // Status if the stopwatch is running
            $table->timestamps(); // Laravel timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stopwatches');
    }
}
