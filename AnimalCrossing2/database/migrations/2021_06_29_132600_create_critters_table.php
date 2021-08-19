<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critters', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name')->unique();
            $table->String('species');
            $table->String('critter_image_path'); 
            $table->string('location');
            $table->String('price');
            $table->String('months_available');
            $table->String('time_available');
            $table->String('donated')->default('Not Donated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critters');
    }
}
