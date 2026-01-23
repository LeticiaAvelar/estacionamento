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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->foreignId('cargo_id')->constrained();
            $table->decimal('salario', 10, 2)->nullable();
            $table->string('hora_entrada', 5)->nullable();
            $table->string('hora_saida', 5)->nullable();
            $table->foreignId('telefone_id')->constrained();
            $table->string('email', 100)->nullable();
            $table->string('chave_pix', 250)->nullable();
            $table->timestamps();
            $table->softDeletes(); // Adiciona a coluna deleted_at para soft deletes

            $table->index('cargo_id');
            $table->index('telefone_id');
            $table->index('nome'); // Índice para buscas por nome
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
