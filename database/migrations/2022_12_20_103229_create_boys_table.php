<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('panolini')->default('m');
            $table->string('dentiera')->default(' ');
            $table->string('dieta')->default('libera');
            $table->string('altro')->default(' ');
            $table->string('malatia')->default(' ');
            $table->string('cinura')->default(' ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boys');
    }
}
