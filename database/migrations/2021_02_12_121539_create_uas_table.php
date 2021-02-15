<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("astring");
            $table->integer("ainteger");
            $table->boolean("aboolean");
            $table->double("adouble");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uas');
    }
}
