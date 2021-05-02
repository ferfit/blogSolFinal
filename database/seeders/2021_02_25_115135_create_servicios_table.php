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
            $table->text('descripcion')->nullable();

            $table->string('titulo_en')->nullable()->unique();
            $table->text('descripcion_en')->nullable();
            $table->string('slug_en')->nullable()->unique();

            $table->string('titulo_it')->nullable()->unique();
            $table->text('descripcion_it')->nullable();
            $table->string('slug_it')->nullable()->unique();

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
