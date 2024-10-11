<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('service_icon'); // Icon for the service
            $table->string('service_name'); // Name of the service
            $table->text('description'); // Description of the service
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('service'); // Drop the table if it exists
    }
}
