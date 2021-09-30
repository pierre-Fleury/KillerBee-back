<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrammageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grammage', function (Blueprint $table) {
            $table->increments('gra_id');
            $table->foreignId('mod_id')->constrained('modele');
            $table->foreignId('ing_id')->constrained('ingredient');
            $table->string('gra_grammage', 255);
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
        Schema::dropIfExists('grammage');
    }
}
