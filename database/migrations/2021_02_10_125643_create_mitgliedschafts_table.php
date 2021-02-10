<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitgliedschaftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitgliedschafts', function (Blueprint $table) {
            $table->id("MNr");
            $table->timestamps();
            $table->BigInteger('kundes_id')->unsigned();
            $table->foreign('kundes_id')->references('KNr')->on('kundes');
            $table->string("Rabattaktion");
            $table->date("Bindung");
            $table->integer("Laufzeit");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitgliedschafts');
    }
}
