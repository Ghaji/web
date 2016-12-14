<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('category_name');
            $table->string('name')->uniqid();
            $table->string('slug')->uniqid();
            $table->string('code')->uniqid();
            $table->string('image');
            $table->text('description');
            $table->integer('image_id');
            $table->integer('position');
            $table->integer('visible');
            $table->integer('weight');
            $table->string('icon');
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
        Schema::drop('faculties');
    }
}
