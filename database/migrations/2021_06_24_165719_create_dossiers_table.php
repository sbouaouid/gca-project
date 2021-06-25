<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('Ref_cabinet');
            $table->string('Type_de_dossier')->nullable();
            $table->string('Type_de_sujet')->nullable();
            $table->string('V_ref');
            $table->string('Ref_tribunal');
            $table->string('Tribunal');
            $table->date('Date');
            $table->string('Lieu');
            $table->integer('Montant')->nullable();
            $table->string('Nom_du_juge')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
