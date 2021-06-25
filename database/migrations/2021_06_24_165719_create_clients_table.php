<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Adresse');
            $table->string('Ville');
            $table->string('Téléphone1');
            $table->string('Téléphone2')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Email');
            $table->string('Observation_client')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
