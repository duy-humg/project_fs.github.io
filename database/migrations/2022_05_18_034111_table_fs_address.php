<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('alias',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->text('address')->nullable();
            $table->string('icon',255)->nullable();
            $table->string('image',255)->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering')->nullable();
            $table->string('latitude',255)->nullable();
            $table->string('longitude',255)->nullable();
            $table->text('more_info')->nullable();
            $table->string('fax',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('website',255)->nullable();
            $table->integer('province')->nullable();
            $table->integer('district')->nullable();
            $table->string('address2',255)->nullable();
            $table->string('link',255)->nullable();
            $table->text('map')->nullable();
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
        Schema::dropIfExists('fs_address');
    }
}
