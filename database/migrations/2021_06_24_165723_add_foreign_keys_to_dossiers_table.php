<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dossiers', function (Blueprint $table) {
            $table->foreignId('client_id')
                    ->constrained('clients')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('adversaire_id')
                    ->constrained('adversaires')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('procedure_id')
                    ->constrained('procedures')
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
        Schema::table('dossiers', function (Blueprint $table) {
            $table->dropForeign('dossiers_client_id_foreign');
            $table->dropForeign('dossiers_adversaire_id_foreign');
            $table->dropForeign('dossiers_procedure_id_foreign');
        });
    }
}
