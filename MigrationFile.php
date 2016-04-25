<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('counties');
        Schema::create('counties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sno');
            $table->string('name');
            $table->string('tour');
            $table->string('former_province');
            $table->string('area_km2');
            $table->string('population_2009');
            $table->string('capital');
            $table->string('iso_3166_2')->default('KE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('counties');
    }
}
