<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdier', function (Blueprint $table) {
            $table->id();
            $table->string("huisdiernaam");
            $table->string("soort");
            $table->unsignedInteger("baasje_id");
            $table->foreign("baasje_id")->references("id")->on("users");
            $table->string("image");
            $table->string("oppasDatum");
            $table->string("uurtarief");
            $table->string("duurOppas");
            $table->text("huisdierInformatie");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function(Blueprint $table){
            $table->dropforeign("huisdier_baasje_id_foreign");
        });
    }
}
