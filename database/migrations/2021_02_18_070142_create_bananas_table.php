<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBananasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bananas', function (Blueprint $table) {
            $table->id();
            $table->date('birthday');
            $table->string('color');
            $table->string('nickname');
            $table->integer('length');
            $table->boolean('edible');
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
        Schema::dropIfExists('bananas');
    }
}
