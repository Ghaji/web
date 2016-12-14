<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('has_courses');
            $table->integer('departments_id');
            $table->string('name');
            $table->string('slug');
            $table->string('notice');
            $table->string('content');
            $table->integer('position');
            $table->string('description');
            $table->integer('visible');
            $table->integer('weight');  
            $table->integer('programme_duration');
            $table->integer('qualification_type_id');
            $table->integer('programme_category_id');
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
        Schema::drop('programmes');
    }
}
