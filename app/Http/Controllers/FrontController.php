<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    //
     /**
     * funcion que retorna la visata del frotend
     */
    public function index(){       
        return view('Frontend.home');
    }

    /**
     * funcion que devuelve los productos y nuevos productos
     */
    // public function productos_inicio(){
    //     $productos = DB::connection('mysql2')->table('tbl_productos')->get();
    //     $nuevos_productos = DB::connection('mysql2')->table('tbl_productos')->latest()->take(3)->get();
    //     return response()->json([
    //         'productos' => $productos,
    //         'nuevos_productos' => $nuevos_productos
    //     ]);
    // }

    /**
     * funcion que retorna la visata del frotend
     */
    public function viewContacto(){
        return view('Frontend.contacto');
    }

    /**
     * funcion que retorna a la vista de nosotros
     */
    public function viewNosotros(){
        return view('Frontend.nosotros');
    }

   
    /**
     * funcion que retorna la info del producto
     */
    public function detalleP($id){
        $producto = DB::connection('mysql2')->table('tbl_productos')->where('id_producto',$id)->get();
        $imagenes = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $id)->get();
        return response()->json(['producto' => $producto, 'imagenes' => $imagenes]);
    } 

    /**
     * funcion que retorna las cateogorias
     */
    public function listaCategorias(){
        $categorias = DB::connection('mysql2')->table('tbl_categoria')->get();
        return $categorias;
    }
   
}
