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
        Schema::create('tbl_depoimentos', function (Blueprint $table) {
            $table->integer('id_depoimentos', true);
            $table->integer('id_cliente')->index('fk_depoimento_cliente');
            $table->string('titulo_depoimentos', 50)->nullable();
            $table->text('descricao_depoimentos');
            $table->integer('nota_depoimentos');
            $table->string('status_depoimentos', 10)->nullable()->default('PENDENTE');
            $table->dateTime('data_criacao_depoimentos')->useCurrent();
            $table->dateTime('data_atualizacao_depoimentos')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_depoimentos');
    }
};
