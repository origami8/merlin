<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("one_to_ten");
            $table->boolean("yes_no");
            $table->string("firstname");
            $table->string("lastname", 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affes');
    }
}
