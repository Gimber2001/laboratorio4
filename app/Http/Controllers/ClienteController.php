<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formLogin(){
        return view("login");
    }

    public function home(){
        return view("home");
    }
    public function processLogin(Request $request){
        $request->validate([
            "dni" => "required",
            "clave" => "required"
        ]);

        $dni = $request->input("dni");
        $clave = $request->input("clave");

        $result = Cliente::where("dni", $dni)->where("clave",$clave)->get();

        if($result==null){
            return "Usuario y/o clave incorecctos";
        }else{
            return redirect(route("home"));
        }
    }
    public function formRegistrar(){
        return view("cliente.registrar");
    }

    public function processRegistrar(Request $request){
        $request->validate([
            "dni" => "required|unique:clientes",
            "nombre" => "requiered",
            "clave" => "requiered",
        ]);

        $cliente = new Cliente();
        $cliente->dni = $request->input("dni");
        $cliente->nombre = $request->input("nombre");
        $cliente->clave = $request->input("clave");
        $result = $cliente->save();
        if($result!=0) {
            return redirect(route("login"));
        }
    }
}

