<?php

namespace App\Http\Controllers;

use App\http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function showPanel()
    {
        return view('Administrador.showPanel');
    }
    public function showSesion()
    {
        return view('Administrador.showSesion');
    }
}
