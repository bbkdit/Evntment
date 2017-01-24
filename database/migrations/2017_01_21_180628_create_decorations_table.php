<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decorations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->integer('price');
            $table->boolean('is_negotiable');
            $table->text('description');
            $table->string('city');
            $table->string('area');
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
        Schema::drop('decorations');
    }
}
