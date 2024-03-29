<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensajes;
use Illuminate\Support\Facades\DB;



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
        $categorias = DB::connection('mysql2')->table('tbl_categoria')
                    ->join('tbl_subcategoria', 'tbl_categoria.id_categoria','=','tbl_subcategoria.id_categoria')
                    ->select('tbl_categoria.*', 'tbl_subcategoria.*')
                    ->get();
        return $categorias;
    }

    /**
     * funcion que agrega mensajes
     */
    public function agregarMensaje(Request $request){
        $msj = new Mensajes();
        $msj->nombre = $request->nombre;
        $msj->correo = $request->correo;
        $msj->numero_telefonico = $request->numero_telefonico;
        $msj->mensaje = $request->mensaje;
        $msj->estatus = 0;
        $msj->save();

        $notificacion =  DB::connection('mysql2')->table('tbl_notificaciones')
        ->insert([
            'descripcion' => 'Tienes un nuevo Mensaje del Cliente '.$request->nombre,
            'id_user_de' => $msj->id_mensaje,
            // 'id_user_para' => 6,
            'id_user_para' => 1,
            'modulo' => 'Mensaje',
            'detalle_notificacion' => 'Nuevo',
            'url' => 'mensaje',
            'estatus' => 1
        ]);
        return $msj;

    }

}
