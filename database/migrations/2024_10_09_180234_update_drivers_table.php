<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('pickup_time')->nullable()->change(); // Make pickup_time nullable
            // Alternatively, you could use a default value instead of nullable
            // $table->string('pickup_time')->default('09:00 AM')->change(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('pickup_time')->nullable(false)->change(); // Revert to not nullable if necessary
        });
    }
}
