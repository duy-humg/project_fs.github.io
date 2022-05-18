<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255)->nullable();
            $table->string('alias',255)->nullable();
            $table->string('category_alias',255)->nullable();
            $table->string('category_name',255)->nullable();
            $table->string('category_alias_wrapper',255)->nullable();
            $table->tinyInteger('category_published')->nullable();
            $table->integer('ordering')->nullable();
            $table->string('icon',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('video',255)->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_new')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_hot')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('seo_title',255)->nullable();
            $table->string('seo_keyword',255)->nullable();
            $table->string('seo_description',255)->nullable();
            $table->tinyInteger('author_id')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('author',255)->nullable();
            $table->tinyInteger('author_last_id')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('author_last',255)->nullable();
            $table->integer('comments_total')->nullable();
            
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
        Schema::dropIfExists('fs_news');
    }
}
