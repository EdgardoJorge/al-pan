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
    route::get('/productos', 'showProductos');
    route::get('/productos/{producto}', 'showProductosFiltrar');
    route::get('/productos/crear', 'showSeleccionarPruductCre');
    route::get('/productos/SeleccionarProductoEditar', 'showSeleccionarEdit');
    route::get('/productos/SeleccionarProductoDelete', 'showSeleccionarDelete');
    route::put('/productos/{producto}', 'updateProducto');
    route::delete('/productos/{producto}', 'deleteProducto');
});
route::controller(ProveedoresController::class)->group(function () {
    route::get('/proveedores', 'showProveedores');
    route::get('/proveedores/{proveedor}', 'showProveedoresFiltrar');
    route::get('/proveedores/SeleccionarProveedorCrear', 'showSeleccionarCre');
    route::get('/proveedores/SeleccionarProveedorDelete', 'showSeleccionarDelete');
    route::put('/proveedores/{proveedor}', 'updateProveedor');
    route::delete('/proveedores/{proveedor}', 'deleteProveedor');
});
