<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsMenusCreatelink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_menus_createlink', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('parent_id',255)->nullable();
            $table->string('link_menu',255)->nullable();
            $table->string('add_parameter',255)->nullable();
            $table->string('add_table',255)->nullable();
            $table->string('add_field_value',255)->nullable();
            $table->string('add_field_display',255)->nullable();
            $table->string('params',255)->nullable();
            $table->tinyInteger('add_field_distinct')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_article')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_type')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering')->nullable(); 
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
        Schema::dropIfExists('fs_menus_createlink');
    }
}
