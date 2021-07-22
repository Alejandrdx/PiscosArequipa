<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController as Cliente;
use App\Http\Controllers\ContactoController as Contacto;
use App\Http\Controllers\DetalleFacturaController as DetalleFactura;
use App\Http\Controllers\DetalleInventarioController as DetalleInventario;
use App\Http\Controllers\DetalleNotaPedidoController as DetalleNotaPedido;
use App\Http\Controllers\DetalleSolicitudController as DetalleSolicitud;
use App\Http\Controllers\EstadoController as Estado;
use App\Http\Controllers\FacturaController as Factura;
use App\Http\Controllers\NotaPedidoController as NotaPedido;
use App\Http\Controllers\PiscoController as Pisco;
use App\Http\Controllers\RolController as Rol;
use App\Http\Controllers\AuthController as Empleado;
use App\Http\Controllers\SedeController as Sede;
use App\Http\Controllers\SolicitudController as Solicitud;
use App\Http\Controllers\TipoReunionController as TipoReunion;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [Empleado::class, 'login']);

Route::post('logout', [Empleado::class, 'logout'])->middleware('auth:sanctum')
    ->middleware('auth:sanctum');

Route::apiResource('cliente', Cliente::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('contacto', Contacto::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('detalle_factura', DetalleFactura::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('detalle_inventario', DetalleInventario::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('detalle_nota_pedido', DetalleNotaPedido::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('detalle_solicitud', DetalleSolicitud::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('estado', Estado::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('factura', Factura::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('nota_pedido', NotaPedido::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');
    
Route::apiResource('pisco', Pisco::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum'); 

Route::apiResource('rol', Rol::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('empleado', Empleado::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('sede', Sede::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('solicitud', Solicitud::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('tipo_reunion', TipoReunion::class)
    ->only(['index', 'store', 'show', 'update', 'destroy'])
    ->middleware('auth:sanctum');
