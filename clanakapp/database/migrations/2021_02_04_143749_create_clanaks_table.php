<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClanaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clanaks', function (Blueprint $table) {
            $table->id();
            $table->string('naslov');
            $table->string('tekst');
            $table->bigInteger('idKorisnik')->unsigned();
            $table->timestamp('datumObjave'); 
            $table->foreign('idKorisnik')->references('id')->on('korisniks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clanaks');
    }
}
