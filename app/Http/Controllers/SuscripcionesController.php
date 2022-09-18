<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Publicacion;
use App\Models\Suscripciones;
use Illuminate\Http\Request;

class SuscripcionesController extends Controller
{
    public function formRegistrar(){
        $clientes = Cliente::all();
        $publicaciones = Publicacion::all();
        return view("suscripcion.registrar")
            ->with("clientes", $clientes)
            ->with("publicaciones", $publicaciones);
    }


    public function processRegistrar(Request $request){
        $request->validate([
            "idCliente" => "required",
            "idPublicacion" => "required"
        ]);

        $suscripciones = new Suscripciones();
        $idPublicacion->id_publicacion =$request->input("idPublicacion");
        $idPublicacion->id_cliente =$request->input("id_Cliente");
        $result = $suscripciones->save();
        if($result!=0){
            return "Suscripcion guardada";
        }
    }
}
