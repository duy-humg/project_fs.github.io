<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('products_id',255)->nullable();
            $table->integer('products_count')->nullable();
            $table->string('session_id',255)->nullable();
            $table->string('sender_name',255)->nullable();
            $table->text('sender_address')->nullable();
            $table->string('sender_email',255)->nullable();
            $table->string('sender_telephone',255)->nullable();
            $table->string('sender_province',255)->nullable();
            $table->string('sender_district',255)->nullable();
            $table->string('sender_wards',255)->nullable();
            $table->text('note_send')->nullable();
            $table->dateTime('created_time')->nullable();
            $table->dateTime('edited_time')->nullable();
            $table->double('total_before_discount', 15, 8)->nullable();
            $table->double('total_after_discount', 15, 8)->nullable();
            $table->double('total_end', 15, 8)->nullable();
            $table->integer('status')->nullable();
            $table->double('fee', 15, 8)->nullable();
            $table->tinyInteger('published')->nullable(); //tinyInteger:Cột tương đương kiểu TINYINT
            $table->integer('ordering')->nullable();
            $table->string('code_company',255)->nullable();
            $table->string('name_company',255)->nullable();
            $table->string('address_company',255)->nullable();
            $table->string('products_id_sub',255)->nullable();
            $table->integer('status1')->nullable();
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
        Schema::dropIfExists('fs_order');
    }
}
