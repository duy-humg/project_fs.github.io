<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('alias',255)->nullable();
            $table->string('alias_wrapper',255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('list_parents',255)->nullable();
            $table->integer('level')->nullable();
            $table->integer('published')->nullable();
            $table->integer('ordering')->nullable();
            $table->string('image',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->string('summary',255)->nullable();
            $table->text('content')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
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
        Schema::dropIfExists('fs_products');
    }
}
