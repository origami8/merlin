<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagers', function (Blueprint $table) {
            $table->id("LNr");
            $table->timestamps();
            $table->BigInteger('artkels_id')->unsigned();
            $table->foreign('artkels_id')->references('ANr')->on('artikels');
            $table->integer("Gang");
            $table->integer("Regal");
            $table->integer("Fach");
            $table->integer("Bestand");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lagers');
    }
}
