<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsLanguagesContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_languages_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('language',255)->nullable();
            $table->string('lang_sort',255)->nullable();
            $table->integer('is_default')->nullable();
            $table->dateTime('modified_time')->nullable();
            $table->dateTime('created_time')->nullable();
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
        Schema::dropIfExists('fs_languages_contents');
    }
}
