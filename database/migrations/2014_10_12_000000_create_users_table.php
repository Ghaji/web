<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('unique_number');
            $table->integer('is_admin_user');
            $table->string('username')->uniqid();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername');
            $table->string('avatar')->default('default.jpg');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->text('address');
            $table->integer('secret_question_id');
            $table->string('secret_answer');
            $table->integer('suspended');
            $table->integer('visible');
            $table->string('slug');
            $table->timestamp('last_login');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
