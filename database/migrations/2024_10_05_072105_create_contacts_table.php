<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name field
            $table->string('email'); // Email field
            $table->string('phone'); // Phone field
            $table->text('message'); // Message field
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts'); // Drop table if it exists
    }
}
