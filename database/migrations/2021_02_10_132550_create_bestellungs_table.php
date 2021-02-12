<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestellungs', function (Blueprint $table) {
            $table->id("BNr");
            $table->timestamps();
            $table->BigInteger('kundes_id')->unsigned();
            $table->foreign('kundes_id')->references('KNr')->on('kundes');
            $table->BigInteger('artikels_id')->unsigned();
            $table->foreign('artikels_id')->references('ANr')->on('artikels');
            $table->integer("Anzahl");
            $table->double("Gesamtpreis");
            $table->boolean("Bezahlt");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestellungs');
    }
}
