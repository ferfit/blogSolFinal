<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->text('contenido')->nullable();

            $table->string('titulo_en')->nullable()->unique();
            $table->text('contenido_en')->nullable();
            $table->string('slug_en')->nullable();

            $table->string('titulo_it')->nullable()->unique();
            $table->text('contenido_it')->nullable();
            $table->string('slug_it')->nullable();

            $table->string('imagen');
            //$table->foreignId('user_id')->references('id')->on('users')->comment('el usuario que creo el post');
            //$table->foreignId('categoria_id')->references('id')->on('categorias')->comment('la categoria');
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
        Schema::dropIfExists('posts');
    }
}
