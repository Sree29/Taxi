<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTable extends Migration
{
    public function up()
    {
        Schema::create('pricing', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('image'); // For storing the image path
            $table->decimal('per_hour_rate', 10, 2);
            $table->decimal('per_day_rate', 10, 2);
            $table->decimal('leasing_rate', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing');
    }
}
