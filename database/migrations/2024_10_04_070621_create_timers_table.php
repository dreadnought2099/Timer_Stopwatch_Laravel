<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->nullable(); // You can track the name of the timer (optional)
            $table->integer('duration')->comment('Timer duration in seconds'); // Timer duration in seconds
            $table->boolean('is_active')->default(false); // Status if the timer is running
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
        Schema::dropIfExists('timers');
    }
}
