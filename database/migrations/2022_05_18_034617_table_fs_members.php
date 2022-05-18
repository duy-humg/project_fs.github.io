<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('code',255)->nullable();
            $table->string('name',255)->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('cmt',255)->nullable();
            $table->string('sex',255)->nullable();
            $table->text('telephone')->nullable();
            $table->string('icon',255)->nullable();
            $table->string('image',255)->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fs_members');
    }
}
