<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;

class ProductosController extends Controller
{
    public function showProductos()
    {
        return view('Productos.showProductos');
    }
    public function showProductosFiltrar($producto)
    {
        return view('Productos.showProductosFiltrar');
    }
    public function showSeleccionarCrear()
    {
        return view('Productos.showProductosCrear');
    }
    public function showSeleccionarEdit()
    {
        return view('Productos.showProductosEdit');
    }
    public function showSeleccionarDelete()
    {
        return view('Productos.showProductosDelete');
    }
    public function updateProducto($producto)
    {
        return ("Se esta actualizando el producto $producto");
    }
    public function deleteProducto($producto)
    {
        return ("Se esta eliminando el producto $producto");
    }
}
