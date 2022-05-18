<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_config', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('title',255)->nullable();
            $table->text('value')->nullable();
            $table->string('data_type',255);
            $table->tinyInteger('is_common')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->tinyInteger('is_ga')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
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
        Schema::dropIfExists('fs_config');
    }
}
