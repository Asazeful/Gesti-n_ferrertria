<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaHerramientas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->id();

            //nombre descripción consola apto para niños precio fecha lanzamiento
            
            //1.Definir los campos de la tabla juegos
            $table->string("nombre",100);
            $table->string("tipo",20);
            $table->integer("precio")->unsigned();
            $table->string("descripcion",200);
            //2. Agregar la columna de la foranea
            //Las claves primarias de laravel (id) por defecto son bigInteger y unsigned
            $table->bigInteger("herramienta_id")->unsigned();
            //3. Agregar la relacion
            //ALTER TABLE ADD CONSTRAINT FOREIGN KEY BLA BLA BLA
            $table->foreign("herramienta_id")->references("id")->on("consolas")->onDelete("cascade");
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
        Schema::dropIfExists('herramientas');
    }
}
