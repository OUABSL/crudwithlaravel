<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index(){
        $datos = DB::select("select * from producto");
        $datos_usuarios = DB::select("select * from usuario");
        return view("welcome")
            ->with("datos",$datos)
            ->with("datos_usuarios", $datos_usuarios);
    }

    public function store(Request $request){
        $nombre = $request->nombre;
        $precio = $request->precio;
        $cantidad = $request->cantidad;

        $producto = DB::table('producto')
                    ->where('nombre', $nombre)
                    ->where('precio', $precio)
                    ->first();
        if ($producto){
            return redirect()->route("crud.index")->withErrors(['nombre' => 'El nombre del producto ya está en uso']);
        } 


        DB::table('producto')->insert([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad
        ]);
        return redirect()->route("crud.index");
    }

    public function delete_producto($id_producto){
        DB::table("producto")->where('id_producto', $id_producto)->delete();
        return redirect()->route('crud.index');

    }

    public function edit($id_producto){
        $product = DB::table('producto')->where('id_producto', $id_producto)->first();
        return view("edit", compact('product'));
    }
    
    public function update(Request $request, $id_producto){
        DB::table('producto')->where('id_producto', $id_producto)->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad
        ]);
    
        return redirect()->route("crud.index");
    }

}

