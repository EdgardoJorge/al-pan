@extends('Template.template')
@section('titulo','Productos')
@section('contenido')
    <header class="row-span-1 col-span-12 bg-brown grid grid-cols-12 grid-rows-3 gap-0">
        <div class="col-start-5 col-end-8 row-start-2 row-end-3">
            <input type="search" name="" id="" class="rounded-xl w-96 bg-no-repeat bg-right " placeholder="Que item desea buscar" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6&quot;&gt;%3Cpath stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z&quot; /&gt;%3C/svg%3E');">
        </div>
        <div class="col-start-11 col-end-12 row-start-2 row-end-3">
            <a href="#" class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white ml-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg></a>
        </div>
    </header>
    <div class="col-span-2 bg-grayDebil row-span-3 rounded-xl ml-5">
        <div class="bg-white rounded-lg mt-8 flex justify-center m-4 hover:bg-slate-400 hover:p-1">
            <a href="#">Producto</a>
        </div>
        <div class="bg-white rounded-lg mt-9 flex justify-center m-4 hover:bg-slate-400 hover:p-1">
            <a href="#">Proveedores</a>
        </div>
    </div>
    <div class="col-start-3 col-end-13 mr-6 row-span-9 mb-6 rounded-xl bg-grayDebil grid grid-cols-10 grid-rows-8 gap-1">
        <table class="w-full">
        <thead>
          <tr>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Valve</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Harina</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Produkt</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Lata</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Nombre</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Presentacion</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Sk</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Fecha de m</th>
            <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left">Stack</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border py-4 px-4">a</td>
            <td class="border py-4 px-4">Harina</td>
            <td class="border py-4 px-4">Produkt</td>
            <td class="border py-4 px-4">10023</td>
            <td class="border py-4 px-4">Hanna sin preparar</td>
            <td class="border py-4 px-4">10 kg</td>
            <td class="border py-4 px-4">05-04-2004</td>
            <td class="border py-4 px-4">10</td>
          </tr>
          <tr>
            <td class="border py-4 px-4">a</td>
            <td class="border py-4 px-4">Harina</td>
            <td class="border py-4 px-4">Produkt</td>
            <td class="border py-4 px-4">10223</td>
            <td class="border py-4 px-4">Hanna son praptar</td>
            <td class="border py-4 px-4">10 km</td>
            <td class="border py-4 px-4">22:08 2024</td>
            <td class="border py-4 px-4">10</td>
          </tr>
          <tr>
            <td class="border py-4 px-4">a</td>
            <td class="border py-4 px-4">Harina</td>
            <td class="border py-4 px-4">Produkt</td>
            <td class="border py-4 px-4">11223</td>
            <td class="border py-4 px-4"></td>
            <td class="border py-4 px-4"></td>
            <td class="border py-4 px-4">23-09-2004</td>
            <td class="border py-4 px-4">10</td>
          </tr>
        </tbody>
      </table>
    </div>
@endsection