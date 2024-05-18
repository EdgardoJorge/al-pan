<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;


Route::get('/', function () {
    return view('welcome');
});
route::controller(AdministradorController::class)->group(function () {
    route::get('/Administrador/panelPrincipal', 'showPanel');
    route::get('/Administrador/InicioSesion', 'showSesion');
});

route::controller(ProductosController::class)->group(function () {
    Route::get('/productos', [ProductosController::class, 'showProductos']);
    Route::get('/productos/{producto}', [ProductosController::class, 'showProductosFiltrar']);
    Route::get('/productos/SeleccionarProductoCrear', [ProductosController::class, 'showSeleccionarCrear']);
    Route::get('/productos/SeleccionarProductoEditar', [ProductosController::class, 'showSeleccionarEdit']);
    Route::get('/productos/SeleccionarProductoDelete', [ProductosController::class, 'showSeleccionarDelete']);
    Route::put('/productos/{producto}', [ProductosController::class, 'updateProducto']);
    Route::delete('/productos/{producto}', [ProductosController::class, 'deleteProducto']);
});
route::controller(ProveedoresController::class)->group(function () {
    route::get('/proveedores', 'showProveedores');
    route::get('/proveedores/{proveedor}', 'showProveedoresFiltrar');
    route::get('/proveedores/SeleccionarProveedorCrear', 'showSeleccionarCre');
    route::get('/proveedores/SeleccionarProveedorDelete', 'showSeleccionarDelete');
    route::put('/proveedores/{proveedor}', 'updateProveedor');
    route::delete('/proveedores/{proveedor}', 'deleteProveedor');
});
