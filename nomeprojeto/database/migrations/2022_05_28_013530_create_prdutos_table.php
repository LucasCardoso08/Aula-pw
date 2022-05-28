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
        Schema::create('prdutos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('desc_produto');
            $table->string('barcode_produto');
            $table->string('marca_produto');

            /* chave estrangeira */

            $table->unsignedBigInteger('id_acesso');
            $table->foreign('id_acesso')->references('id')->on('acessos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prdutos');
    }
};
