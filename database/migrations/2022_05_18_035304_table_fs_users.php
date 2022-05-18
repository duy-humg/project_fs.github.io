<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',255)->nullable();
            $table->string('full_name',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('fname',255)->nullable();
            $table->string('lname',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('country',255)->nullable();
            $table->integer('published')->nullable();
            $table->integer('ordering')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->string('image',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->text('summary')->nullable();
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
        Schema::dropIfExists('fs_users');
    }
}
