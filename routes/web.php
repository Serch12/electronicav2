<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Frontend.app');
// });
Route::get('/inicio/productos', function () {
    $productos = DB::connection('mysql2')->table('tbl_productos')->get();
    $nuevos_productos = DB::connection('mysql2')->table('tbl_productos')->latest()->take(4)->get();
    foreach ($nuevos_productos as $value) {
        $imagen = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $value->id_producto)->first();
        if(isset($imagen)){
            $value->trae_imagen = 'Si';
            $value->imagen_principal = $imagen->nombre;
        }else{
            $value->trae_imagen = 'No';
            $value->imagen_principal = 'assets/images/pro3/27.jpg';
        }
    }
    foreach ($productos as $value2) {
        $imagen2 = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $value2->id_producto)->first();
        if(isset($imagen2)){
            $value2->trae_imagen = 'Si';
            $value2->imagen_principal = $imagen2->nombre;
        }else{
            $value2->trae_imagen = 'No';
            $value2->imagen_principal = 'assets/images/pro3/27.jpg';
        }
    }
    return response()->json([
        'productos' => $productos,
        'nuevos_productos' => $nuevos_productos
    ]); 
});
Route::get('/catalogo/productos', function () {
    $categorias = DB::connection('mysql2')->table('tbl_categoria')->get();
    $marcas = DB::connection('mysql2')->table('tbl_marcas')->get();
    $modelos = DB::connection('mysql2')->table('tbl_modelo')->get();
    $productos = DB::connection('mysql2')->table('tbl_productos')->paginate(2);
    
    foreach ($productos as $value2) {
        $imagen2 = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $value2->id_producto)->first();
        if(isset($imagen2)){
            $value2->trae_imagen = 'Si';
            $value2->imagen_principal = $imagen2->nombre;
        }else{
            $value2->trae_imagen = 'No';
            $value2->imagen_principal = 'assets/images/pro3/27.jpg';
        }
    }
    return response()->json([
        'categorias' => $categorias,
        'marcas' => $marcas,
        'modelos' => $modelos,
        'productos' => $productos,
        'pagination'=>[
            'total' => $productos->total(),
            'current_page' => $productos->currentPage(),
            'per_page' => $productos->perPage(),
            'last_page' => $productos->lastPage(),
            'from' => $productos->firstItem(),
            'to' => $productos->lastPage()
        ]
    ]); 
});

Route::post('/catalogo/busqueda-filtro', function (Illuminate\Http\Request $request) {
    $estatus_categoria = $request->estatus['estatus_categoria'];
    $estatus_marca = $request->estatus['estatus_marca'];
    $estatus_modelo = $request->estatus['estatus_modelo'];
    $productos = DB::connection('mysql2')->table('tbl_productos')
        ->join('tbl_marcas', 'tbl_marcas.id_marcas','=','tbl_productos.marca')
        ->join('tbl_modelo', 'tbl_modelo.id_modelo','=','tbl_productos.modelo')
        ->join('tbl_categoria', 'tbl_categoria.id_categoria','=','tbl_productos.categoria')
        ->select('tbl_productos.*')
        ->where(function($query) use ($estatus_categoria) {
            foreach ($estatus_categoria as $val) {
              $query->orWhere('tbl_productos.categoria','LIKE','%'.$val.'%');
            }
        })
        ->where(function($query) use ($estatus_marca) {
            foreach ($estatus_marca as $val) {
              $query->orWhere('tbl_productos.marca','LIKE','%'.$val.'%');
            }
        })
        ->where(function($query) use ($estatus_modelo) {
            foreach ($estatus_modelo as $val) {
              $query->orWhere('tbl_productos.modelo','LIKE','%'.$val.'%');
            }
        })
        ->orderBy('tbl_productos.id_producto','DESC')
        ->paginate(2);
        foreach ($productos as $value2) {
            $imagen2 = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $value2->id_producto)->first();
            if(isset($imagen2)){
                $value2->trae_imagen = 'Si';
                $value2->imagen_principal = $imagen2->nombre;
            }else{
                $value2->trae_imagen = 'No';
                $value2->imagen_principal = 'assets/images/pro3/27.jpg';
            }
        }
    return response()->json([
        'productos' => $productos,
        'pagination'=>[
            'total' => $productos->total(),
            'current_page' => $productos->currentPage(),
            'per_page' => $productos->perPage(),
            'last_page' => $productos->lastPage(),
            'from' => $productos->firstItem(),
            'to' => $productos->lastPage()
        ]
    ]); 
});

Route::get('/detalle-producto/detalle/{id}', function ($id) {
    $producto = DB::connection('mysql2')->table('tbl_productos')
    ->join('tbl_marcas', 'tbl_marcas.id_marcas','=','tbl_productos.marca')
    ->join('tbl_modelo', 'tbl_modelo.id_modelo','=','tbl_productos.modelo')
    ->join('tbl_categoria', 'tbl_categoria.id_categoria','=','tbl_productos.categoria')
    ->select('tbl_productos.*','tbl_marcas.marcas AS nombre_marca','tbl_modelo.modelo AS nombre_modelo','tbl_categoria.categoria AS nombre_categoria')
    ->where('tbl_productos.id_producto',$id)
    ->get();
    $imagenes = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $id)->get();
    return response()->json([
        'producto' => $producto, 
        'imagenes' => $imagenes
    ]);
});

Route::get('/categorias', [FrontController::class, 'listaCategorias'])->name('categorias');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{any}', function () {
    return view('Frontend.app');
})->where('any', '.*');