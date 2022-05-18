<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsConfigModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_config_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('module',255);
            $table->string('view',255);
            $table->string('task',255);
            $table->tinyInteger('published'); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering');
            $table->tinyInteger('cache'); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->text('params');
            $table->string('fields_seo_title',255);
            $table->string('fields_seo_keyword',255);
            $table->string('fields_seo_description',255);
            $table->string('fields_seo_h1',255);
            $table->string('fields_seo_h2',255);
            $table->string('fields_seo_image_alt',255);
            $table->string('value_seo_title',255);
            $table->string('value_seo_keyword',255);
            $table->string('value_seo_description',255);
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
        Schema::dropIfExists('fs_config_modules');
    }
}
