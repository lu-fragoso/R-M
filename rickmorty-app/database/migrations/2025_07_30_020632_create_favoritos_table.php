<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->integer('personagem_id');
            $table->string('personagem_nome');
            $table->string('personagem_especie');
            $table->string('personagem_imagem');
            $table->string('personagem_url');
            $table->string('personagem_create_at');
            $table->string('personagem_update_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
}
