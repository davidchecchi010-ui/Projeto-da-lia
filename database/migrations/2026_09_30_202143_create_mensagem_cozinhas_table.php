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
        Schema::create('mensagem_cozinhas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120);
            $table->string('email')->nullable();
            $table->string('assunto', 40);
            $table->text('mensagem');
            $table->string('status', 20)->default('pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagem_cozinhas');
    }
};
