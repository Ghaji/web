<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSideNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_side_navigations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('side_navigations_id');
            $table->integer('has_children');
            $table->string('name')->uniqid();
            $table->string('slug')->uniqid();
            $table->integer('position');
            // $table->text('content');
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
        Schema::drop('sub_side_navigations');
    }
}
