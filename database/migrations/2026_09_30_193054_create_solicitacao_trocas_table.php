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
        Schema::create('solicitacao_trocas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->date('data_refeicao');
            $table->string('mistura_atual');
            $table->string('mistura_solicitada');
            $table->text('motivo')->nullable();
            $table->string('status')->default('pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacao_trocas');
    }
};
