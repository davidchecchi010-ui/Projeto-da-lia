<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('solicitacao_trocas', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->date('data_refeicao')->nullable()->change();
            $table->string('mistura_atual')->nullable()->change();
            $table->string('mistura_solicitada')->nullable()->change();
            $table->string('ano', 30)->nullable();
            $table->string('senai', 120)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('solicitacao_trocas', function (Blueprint $table) {
            $table->dropColumn(['ano', 'senai']);
        });
    }
};
