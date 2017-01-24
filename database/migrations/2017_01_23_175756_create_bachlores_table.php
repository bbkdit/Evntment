<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBachloresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachlores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->integer('price');
            $table->boolean('is_negotiable');
            $table->boolean('is_perhead');
            $table->text('description');
            $table->string('city');
            $table->string('area');           
            $table->string('duration');
            $table->text('booking_term');
            $table->integer('min_capacity');
            $table->integer('max_capacity');
            $table->text('slug_n');
            $table->integer('cat_id');
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
        Schema::drop('bachlores');
    }
}
