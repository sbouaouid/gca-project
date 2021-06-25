<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSujetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sujets', function (Blueprint $table) {
            $table->foreignId('dossier_id')
                    ->constrained('dossiers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sujets', function (Blueprint $table) {
            $table->dropForeign('sujets_dossier_id_foreign');
        });
    }
}
