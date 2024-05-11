<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;

class ProveedoresController extends Controller
{
    public function showProveedores()
    {
        return view('Proveedores.showProveedores');
    }
    public function showProveedoresFiltrar()
    {
        return view('Proveedores.showProveedoresFiltrar');
    }
    public function showSeleccionarCre()
    {
        return view('Proveedores.showProveedoresCrear');
    }
    public function showSeleccionarDelete()
    {
        return view('Proveedores.showProveedoresDelete');
    }
    public function updateProveedor($proveedor)
    {
        return ("Se edito el proveedor $proveedor");
    }
    public function deleteProveedor($proveedor)
    {
        return ("Se elimino el proveedor $proveedor");
    }
}
