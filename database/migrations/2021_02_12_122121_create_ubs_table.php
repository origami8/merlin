<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('uas_id')->unsigned();
            $table->foreign('uas_id')->references('id')->on('uas');
            $table->string("bstring");
            $table->integer("binteger");
            $table->boolean("bboolean");
            $table->double("bdouble");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubs');
    }
}
