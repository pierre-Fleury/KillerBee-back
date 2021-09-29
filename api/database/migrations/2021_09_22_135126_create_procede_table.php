<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procede', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->string('pro_nom', 100);
            $table->string('pro_description', 100);
            $table->foreignId('mod_id')->constrained('modele');
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
        Schema::dropIfExists('procede');
    }
}
