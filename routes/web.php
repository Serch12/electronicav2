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
// Route::get('/inicio/productos', [HomeController::class, 'productos_inicio']);
// Route::get('/inicio', [FrontController::class, 'index'])->name('inicio');
// Route::get('/contacto', [FrontController::class, 'viewContacto'])->name('contacto');
// Route::get('/nosotros', [FrontController::class, 'viewNosotros'])->name('nosotros');
// Route::get('/detalle-producto/detalle/{id}',[FrontController::class, 'detalleP'])->name('detalle-producto/detalle/{id}');
Route::get('/detalle-producto/detalle/{id}', function ($id) {
    $producto = DB::connection('mysql2')->table('tbl_productos')->where('id_producto',$id)->get();
    $imagenes = DB::connection('mysql2')->table('tbl_imagenes_producto')->where('id_producto', $id)->get();
    return response()->json([
        'producto' => $producto,
        'imagenes' => $imagenes
    ]);
});
Route::get('/inicio/categorias', [FrontController::class, 'listaCategorias'])->name('inicio/categorias');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{any}', function () {
    return view('Frontend.app');
})->where('any', '.*');
