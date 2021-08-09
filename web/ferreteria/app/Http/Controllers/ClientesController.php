<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
//Aqui va a ir toda la logica vinculada a las consolas
class ClientesController extends Controller
{
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getClientes(){
        //Equivalente a un select * from consolas
        $clientes = cliente::all();
        return $clientes;
    }


    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * Una Request es un objeto php que permite acceder a las cosas que me mandaron
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearCliente(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $cliente = new Cliente();
        $cliente->nombre = $input["nombre"];
        $cliente->email = $input["email"];
        $cliente->contrasena = $input["contrasena"];

        $cliente->save();
        return $cliente;
    }

    public function eliminarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $cliente = Cliente::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $cliente->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }


    public function actualizarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $input["nombre"];
        $cliente->email = $input["email"];
        $cliente->contrasena = $input["contrasena"];
        $cliente->save();
        return $cliente; 
    }

}


// view productos.blade.php
// renderizar los productos 

//ProductosController:
  //  - ir a buscar los productos a la bd
  //  - los filtra por los disponibles
  // - formatea el precio
  // retorna lista de productos procesados

