<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('pick_up_location'); // Pick-up location (string)
            $table->string('drop_off_location'); // Drop-off location (string)
            $table->date('pick_up_date'); // Pick-up date (date type)
            $table->date('drop_off_date'); // Drop-off date (date type)
            $table->time('pick_up_time'); // Change to string to hold AM/PM format
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking'); // Drops the table if it exists
    }
}
