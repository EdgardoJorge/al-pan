@extends('Template.template')
@section('titulo','Inicio de sesion')
@section('contenido')
    <header class="row-span-1 col-span-12 bg-brown grid grid-cols-12 grid-rows-3 gap-0">
    </header>
    <div class="row-start-2 row-end-8 col-start-4 col-end-10 bg-grayDebil rounded-lg flex flex-col justify-evenly items-center">
        <h1 class="text-2xl">Inicio de sesion</h1>
        <input type="text" name="" id="" class="rounded-lg w-72" placeholder="Usuario">
        <input type="password" name="" id="" class="rounded-lg w-72" placeholder="Contraseña">
        <button class="bg-brown rounded-lg text-white w-40">Iniciar sesion</button>
    </div>
@endsection