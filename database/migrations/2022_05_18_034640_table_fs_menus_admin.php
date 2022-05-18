<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsMenusAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_menus_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('link',255)->nullable();
   
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('admin_type')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('module',255)->nullable();
            $table->string('featured',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->string('view',255)->nullable();
            $table->integer('code_color')->nullable();
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
        Schema::dropIfExists('fs_menus_admin');
    }
}
