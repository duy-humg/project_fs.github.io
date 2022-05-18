<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsNewsCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_news_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('alias',255)->nullable();
            $table->string('alias_wrapper',255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('list_parents',255)->nullable();
            $table->integer('level')->nullable();
            $table->integer('ordering')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('icon',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('seo_title',255)->nullable();
            $table->string('seo_keyword',255)->nullable();
            $table->string('seo_description',255)->nullable();
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
        Schema::dropIfExists('fs_news_categories');
    }
}
