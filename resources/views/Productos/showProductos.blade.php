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
      <div class="col-start-4 col-end-8 flex justify-center mt-7">
        <h1 class="text-3xl font-bold">Productos</h1>
      </div>
      <div class="col-start-8 col-end-10 row-start-3 row-end-4 flex justify-evenly">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>

        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>

        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>

        </a>
      </div>
        <table class="w-full col-start-2 col-end-10 row-start-4 row-end-8 rounded-xl border-separate border-spacing-0 overflow-hidden border border-black">
  <thead>
    <tr>
      <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left border border-black rounded-tl-xl">Lote</th>
      <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left border border-black">Nombre</th>
      <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left border border-black">Presentacion</th>
      <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left border border-black">Fecha de Vencimiento</th>
      <th class="bg-gray-200 text-gray-600 py-3 px-4 text-left border border-black rounded-tr-xl">Stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border py-4 px-4 border-black">10023</td>
      <td class="border py-4 px-4 border-black">Producto A</td>
      <td class="border py-4 px-4 border-black">10 kg</td>
      <td class="border py-4 px-4 border-black">05-04-2024</td>
      <td class="border py-4 px-4 border-black">15</td>
    </tr>
    <tr>
      <td class="border py-4 px-4 border-black">10223</td>
      <td class="border py-4 px-4 border-black">Producto B</td>
      <td class="border py-4 px-4 border-black">5 kg</td>
      <td class="border py-4 px-4 border-black">22-08-2024</td>
      <td class="border py-4 px-4 border-black">25</td>
    </tr>
    <tr>
      <td class="border py-4 px-4 border-black">11223</td>
      <td class="border py-4 px-4 border-black">Producto C</td>
      <td class="border py-4 px-4 border-black">1 kg</td>
      <td class="border py-4 px-4 border-black">23-09-2024</td>
      <td class="border py-4 px-4 border-black">30</td>
    </tr>
  </tbody>
</table>

    </div>
@endsection