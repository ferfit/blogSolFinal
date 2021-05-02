<?php

use App\Models\Servicio;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('subtitulo')->nullable();
            $table->text('descripcion');

            $table->decimal('precioEuro')->nullable();
            $table->decimal('precioPeso')->nullable();

            $table->string('imagen');
            $table->enum('estado',[Servicio::ACTIVO,Servicio::DESACTIVADO]);
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
        Schema::dropIfExists('servicios');
    }
}
