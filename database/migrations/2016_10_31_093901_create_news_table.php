<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('itype');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('latest_news');
            $table->string('title')->index();
            $table->string('display_line')->index();
            $table->string('slug');
            $table->text('content');
            $table->integer('published');
            $table->integer('has_image');
            $table->integer('image_id');
            $table->integer('position');
            $table->integer('level');
            $table->integer('visible');
            $table->integer('archived');
            $table->string('archived_by');
            $table->timestamp('archived_date');
            $table->string('author');
            $table->integer('verified');
            $table->string('verified_by');
            $table->timestamp('verified_date');
            $table->integer('deleted');
            $table->string('deleted_by');
            $table->timestamp('deleted_date');
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
        Schema::drop('news');
    }
}
