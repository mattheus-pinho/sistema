<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_equipamento');
            $table->unsignedBigInteger('id_orcamento');
            $table->timestamp('data_entrada');
            $table->timestamp('data_prazo')->nullable();
            $table->timestamp('data_finalizacao')->nullable();
            $table->string('descricao_problema');
            $table->string('descricao_resolucao');
            $table->string('descricao_observacao');
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('users');
            $table->foreign('id_equipamento')->references('id')->on('equipamento');
            $table->foreign('id_orcamento')->references('id')->on('orcamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico');
    }
};
