<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->increments('mod_id');
            $table->string('mod_nom', 255);
            $table->string('mod_description', 255);
            $table->float('mod_pUHT', 100);
            $table->string('mod_gamme', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele');
    }
}
