<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('razao_social');
            $table->string('telefone');
            $table->string('email');
            $table->string('cnpj')->primary();
            $table->string('endereco');
            $table->unsignedBigInteger('id_responsavel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
