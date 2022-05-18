<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsOrderItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->integer('estore_id')->nullable();
            $table->double('price', 15, 8)->nullable();
            $table->double('price_old', 15, 8)->nullable();
            $table->integer('count')->nullable();
            $table->double('discount', 15, 8)->nullable();
            $table->double('discount_incentives', 15, 8)->nullable();
            $table->double('total', 15, 8)->nullable();
            $table->double('total_after_discount', 15, 8)->nullable();
            $table->dateTime('time_order')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('warranty_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('product_id_sub')->nullable();
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
        Schema::dropIfExists('fs_order_items');
    }
}
