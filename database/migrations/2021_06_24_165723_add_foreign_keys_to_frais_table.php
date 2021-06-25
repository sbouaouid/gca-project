<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frais', function (Blueprint $table) {
            $table->foreignId('honoraire_id')
                    ->constrained('honoraires')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::table('frais', function (Blueprint $table) {
            $table->dropForeign('frais_honoraire_id_foreign');
            $table->dropForeign('frais_dossier_id_foreign');
        });
    }
}
