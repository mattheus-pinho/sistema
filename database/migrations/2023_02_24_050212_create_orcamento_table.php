<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoTable extends Migration
{
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servico');
            $table->unsignedBigInteger('id_produto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamento');
    }
}
