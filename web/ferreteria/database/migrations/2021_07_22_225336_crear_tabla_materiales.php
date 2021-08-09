<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMateriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();

            
            //1.Definir los campos de la tabla juegos
            $table->string("nombre",100);
            $table->string("tipo",20);
            $table->integer("precio")->unsigned();
            $table->string("descripcion",200);
            //2. Agregar la columna de la foranea
            //Las claves primarias de laravel (id) por defecto son bigInteger y unsigned
            $table->bigInteger("material_id")->unsigned();
            //3. Agregar la relacion
            //ALTER TABLE ADD CONSTRAINT FOREIGN KEY BLA BLA BLA
            $table->foreign("material_id")->references("id")->on("consolas")->onDelete("cascade");
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
        Schema::dropIfExists('materiales');
    }
}
