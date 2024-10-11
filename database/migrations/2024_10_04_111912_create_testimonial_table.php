<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialTable extends Migration
{
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID field
            $table->string('icon'); // Field for storing the icon (e.g., icon class name)
            $table->string('name'); // Name of the person giving the testimonial
            $table->text('description'); // Testimonial description or content
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonial');
    }
}
