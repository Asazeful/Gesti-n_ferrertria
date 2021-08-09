<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
//Aqui va a ir toda la logica vinculada a las consolas
class HerramientasController extends Controller
{
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getHerramientas(){
        //Equivalente a un select * from consolas
        $herramientas = Herramienta::all();
        return $herramientas;
    }
    
    public function filtrarHerramientas(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $herramientas = Herramienta::where("tipo", $filtro)->get();
        //SELECT * FROM consolas WHERE marca = $filtro
        return $herramientas;
    }


    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * Una Request es un objeto php que permite acceder a las cosas que me mandaron
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearHerramienta(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $herramienta = new Herramienta();
        $herramienta->nombre = $input["nombre"];
        $herramienta->tipo = $input["tipo"];
        $herramienta->precio = $input["precio"];
        $herramienta->descripcion = $input["descripcion"];

        $herramienta->save();
        return $herramienta;
    }

    public function eliminarHerramienta(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $herramienta = Herramienta::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $herramienta->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }


    public function actualizarHerramienta(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $herramienta = Herramienta::findOrFail($id);
        $herramienta->nombre = $input["nombre"];
        $herramienta->tipo = $input["tipo"];
        $herramienta->precio = $input["precio"];
        $herramienta->descripcion = $input["descripcion"];
        $consola->save();
        return $consola; 
    }

}


// view productos.blade.php
// renderizar los productos 

//ProductosController:
  //  - ir a buscar los productos a la bd
  //  - los filtra por los disponibles
  // - formatea el precio
  // retorna lista de productos procesados

