<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Driver's name
            $table->string('pickup_location'); // Pick-up location
            $table->string('dropoff_location'); // Drop-off location
            $table->date('pickup_date'); // Pick-up date
            $table->date('dropoff_date'); // Drop-off date
            $table->time('pickup_time'); // Pick-up time
            $table->timestamps(); // This will create created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
