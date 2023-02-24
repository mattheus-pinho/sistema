<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('equipamento_id');
            $table->unsignedBigInteger('orcamento_id');
            $table->unsignedBigInteger('funcionario_id');
            $table->text('desc_problema');
            $table->text('desc_resolucao')->nullable();
            $table->text('desc_observacao')->nullable();
            $table->date('data_entrada');
            $table->date('data_prazo');
            $table->date('data_final')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
