<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppas', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string("naam_oppas");
            $table->string("image")->nullable();
            $table->string("review")->default("nog geen review aanwezig");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oppas');
    }
}
