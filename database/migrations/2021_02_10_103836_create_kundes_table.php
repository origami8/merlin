<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKundesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kundes', function (Blueprint $table) {
            $table->id("KNr");
            $table->timestamps();
            $table->string("Vorname");
            $table->string("Nachname");
            $table->string("Strasse");
            $table->integer("PLZ");
            $table->string("Ort");
            $table->string("Email");
            $table->integer("Telefon");
            $table->string("GebDat");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kundes');
    }
}
