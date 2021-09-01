<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produto extends Migration
{
   
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('valor', 6, 2)->default(0);
            $table->string('imagem');
            $table->enum('ativo', ['S', 'N'])->default('S');           
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
