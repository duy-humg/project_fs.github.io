<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->nullable();
            $table->string('name',255)->nullable();
            $table->string('alias',255)->nullable();
            $table->integer('ordering')->nullable();
            $table->integer('type')->nullable();
            $table->string('icon',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('flash',255)->nullable();
            $table->string('description',255)->nullable();
            $table->text('content')->nullable();
            $table->string('link',255)->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
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
        Schema::dropIfExists('fs_banners');
    }
}
