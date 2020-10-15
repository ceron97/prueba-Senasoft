<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SolicitarController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ProveedoresController;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/index', [UsuariosController::class, 'index'])->name('usuarios');

Route::resource('solicitar', SolicitarController::class);// se llama todos los recuersos de solicitar  

Route::get('/adicionar', function () {
    return view('adicionar');
})->name('adicionar');

Route::resource('bodega', BodegaController::class);

Route::resource('sucursales', SucursalesController::class);// se llama todos los recuersos de la vista 
Route::resource('ventas', VentasController::class);// se llama todos los recuersos de la vista 

Route::get('/admin/index_admin', [AdminController::class, 'index'])->name('index.admin');

Route::resource('admin',AdminController::class);

Route::get('/empresa/usuarios', [EmpresasController::class, 'usuarios'])->name('usuarios.empresa');

Route::resource('proveedores', ProveedoresController::class);
