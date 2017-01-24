<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_name');
            $table->string('file_mime');
            $table->string('file_size');
            $table->string('file_path');
            $table->string('original_filename');
            $table->integer('exp_id');
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
        Schema::drop('expimages');
    }
}
