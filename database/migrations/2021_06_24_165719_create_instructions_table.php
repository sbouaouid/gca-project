<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructions', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->string('Type');
            $table->string('Ref_tribunal');
            $table->string('À propos', 25)->nullable();
            $table->date('Date_audience')->nullable();
            $table->integer('Heure')->nullable();
            $table->integer('Salle')->nullable();
            $table->string('Responsable', 25)->nullable();
            $table->string('Contenu', 25)->nullable();
            $table->string('Discriminator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructions');
    }
}
