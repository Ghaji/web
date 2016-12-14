<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSideNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('side_navigations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->uniqid();
            $table->string('slug')->uniqid();
            $table->integer('position');
            $table->integer('has_sub_sidenav');
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
        Schema::drop('side_navigations');
    }
}
