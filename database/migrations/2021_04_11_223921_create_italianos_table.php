<?php

use App\Models\Italiano;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItalianosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('italianos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('subtitulo')->nullable();
            $table->text('descripcion');
            $table->decimal('precioEuro')->nullable();
            $table->string('imagen');
            $table->enum('estado',[Italiano::ACTIVO,Italiano::DESACTIVADO]);
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
        Schema::dropIfExists('italianos');
    }
}
