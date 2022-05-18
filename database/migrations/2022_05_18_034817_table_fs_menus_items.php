<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsMenusItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_menus_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->tinyInteger('show_admin')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('alias',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('target',255)->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('ordering')->nullable();
            $table->tinyInteger('default')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT       
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT          
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->string('template',255)->nullable();
            $table->string('list_parent',255)->nullable();
            $table->integer('level')->nullable();
            $table->tinyInteger('is_rewrite')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->text('description')->nullable();
            $table->tinyInteger('is_en')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('icon',255)->nullable();
            $table->string('description_short',255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('is_type')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_link')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->text('summary')->nullable();
            $table->string('bk_color',255)->nullable();
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
        Schema::dropIfExists('fs_menus_items');
    }
}
