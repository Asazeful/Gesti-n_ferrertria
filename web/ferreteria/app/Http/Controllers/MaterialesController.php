<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
//Aqui va a ir toda la logica vinculada a las consolas
class MaterialesController extends Controller
{
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getMateriales(){
        //Equivalente a un select * from consolas
        $Materiales = Materiales::all();
        return $Materiales;
    }
    
    public function filtrarMateriales(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $materiales = Materiales::where("tipo", $filtro)->get();
        //SELECT * FROM consolas WHERE marca = $filtro
        return $materiales;
    }


    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * Una Request es un objeto php que permite acceder a las cosas que me mandaron
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearMaterial(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $material = new Material();
        $material->nombre = $input["nombre"];
        $material->tipo = $input["tipo"];
        $material->precio = $input["precio"];
        $material->descripcion = $input["descripcion"];

        $materiales->save();
        return $materiales;
    }

    public function eliminarMaterial(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $material = Material::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $material->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }


    public function actualizarMaterial(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $material = Material::findOrFail($id);
        $material->nombre = $input["nombre"];
        $material->tipo = $input["tipo"];
        $material->precio = $input["precio"];
        $material->descripcion = $input["descripcion"];
        $material->save();
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

