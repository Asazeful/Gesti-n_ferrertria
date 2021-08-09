<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
//Aqui va a ir toda la logica vinculada a las consolas
class AdminsController extends Controller
{
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getAdmins(){
        //Equivalente a un select * from consolas
        $admins = admin::all();
        return $admins;
    }


    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * Una Request es un objeto php que permite acceder a las cosas que me mandaron
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearAdmin(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $admin = new Admin();
        $admin->nombre = $input["nombre"];
        $admin->email = $input["email"];
        $admin->contrasena = $input["contrasena"];

        $admin->save();
        return $admin;
    }

    public function eliminarAdmin(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $admin = Admin::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $admin->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }


    public function actualizarAdmin(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $admin = Admin::findOrFail($id);
        $admin->nombre = $input["nombre"];
        $admin->email = $input["email"];
        $admin->contrasena = $input["contrasena"];
        $admin->save();
        return $admin; 
    }

}


// view productos.blade.php
// renderizar los productos 

//ProductosController:
  //  - ir a buscar los productos a la bd
  //  - los filtra por los disponibles
  // - formatea el precio
  // retorna lista de productos procesados

