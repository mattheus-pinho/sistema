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
        Schema::table('servicos', function (Blueprint $table) {
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->foreign('equipamento_id')->references('id')->on('equipamentos');
            $table->foreign('orcamento_id')->references('id')->on('orcamento');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
