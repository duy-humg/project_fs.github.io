<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsLanguagesAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_languages_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lang_key',255)->nullable();
            $table->string('lang_vi',255)->nullable();
            $table->string('lang_en',255)->nullable();
            $table->string('lang_fr',255)->nullable();
            $table->tinyInteger('is_common')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->string('module',255)->nullable();
            $table->tinyInteger('admin_change')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
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
        Schema::dropIfExists('fs_languages_admin');
    }
}
