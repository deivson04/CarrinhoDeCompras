<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupomDescontosTable extends Migration
{
    
    public function up()
    {
        Schema::create('cupom_descontos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('localizador')->unique();
            $table->decimal('desconto', 6, 2)->default(0);
            $table->enum('modo_desconto', ['valor', 'porc'])->default('porc');
            $table->decimal('limite', 6, 2)->default(0);
            $table->enum('modo_limite', ['valor', 'qtd'])->default('qtd');
            $table->dateTime('dthr_validade');
            $table->enum('ativo', ['S', 'N'])->default('S');            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('cupom_descontos');
    }
}
