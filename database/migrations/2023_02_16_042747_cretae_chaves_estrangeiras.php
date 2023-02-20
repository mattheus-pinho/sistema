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
        Schema::table('servico', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('cpf')->on('users');
            $table->foreign('id_equipamento')->references('id')->on('equipamento');
            $table->foreign('id_orcamento')->references('id')->on('orcamento');
        });

        Schema::table('equipamento', function (Blueprint $table) {
            $table->foreign('id_dono')->references('cpf')->on("users");
        });

        Schema::table('orcamento', function (Blueprint $table) {
            $table->foreign('id_servico')->references('id')->on("servico");
            $table->foreign('id_produto')->references('id')->on("produto");
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
