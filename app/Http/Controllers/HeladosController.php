<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helados\Helados;

class HeladosController extends Controller
{
    //mostrar todos
    public function getAll(){
        $helados = Helados::all();
        return $helados;
    }
    //agregar
    public function add(Request $resquest){
        $helados = Helados::create($request->all());
        return $helados;
    }
    // buscar por id
    public function get ($id){
        $helados = Helados::find($id);
        return $helados;
    } 
    //editar
    public function edit ($id, Request $request){
        $helados = $this->get($id);
        $helados ->fill($request->all())->save();
        return $helados;

    }
    //borrar
    public function delete ($id){
        $helados =this->get($id);
        $helados -> delete();
        return $helados;
    }
    //
}
