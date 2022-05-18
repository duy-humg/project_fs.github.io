<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableFsLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fs_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('table_name',255)->nullable();
            $table->string('field_name',255)->nullable();
            $table->longText('value');
            $table->integer('is_default')->nullable();
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
        Schema::dropIfExists('fs_languages');
    }
}
