<?php

use App\Models\Ingle;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingles', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('subtitulo')->nullable();
            $table->text('descripcion');
            $table->decimal('precioEuro')->nullable();
            $table->string('imagen');
            $table->enum('estado',[Ingle::ACTIVO,Ingle::DESACTIVADO]);
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
        Schema::dropIfExists('ingles');
    }
}
