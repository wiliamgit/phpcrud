<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      //tabelas BOOk fazendo referncia a tabela USERS
        Schema::create('book', function (Blueprint $table) {
            $table->Increments('id');//PRIMAIRE KEY
            $table->integer('id_user')->unsigned();//unsigend - armazenar so numeos inteiros e positivos 
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');//Ondelete e on Update ja atualiza a tabela book, juntamente com a tebela users|| tabela usersFK
            $table->string('title');
            $table->integer('pages');//integer int
            $table->double('valorLi', 10,2);//valor do livro 
            $table->timestamps();//Quando Foi inserido o registro e date
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
