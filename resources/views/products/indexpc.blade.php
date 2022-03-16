@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{ route('products.indexpc') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Productos</a>

        <a href="{{ route('products.createpc') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear PC</a>
    </nav>
    <h1 class="text-5xl text-center pt-24">Bienvenido a la vista para administrador para PC</h1><br><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  
                  <table class="table-fixed w-full">
                      <thead>
                          <tr class="bg-blue-500 text-white">
                          <th class="w-1/20 py-4 ...">ID</th>
                          <th class="w-1/16 py-4 ...">Num serie</th>
                          <th class="w-1/16 py-4 ...">Marca</th>
                          <th class="w-1/16 py-4 ...">Monitor</th>
                          <th class="w-1/16 py-4 ...">RAM</th>
                          <th class="w-1/16 py-4 ...">Procesador</th>
                          <th class="w-1/16 py-4 ...">Estatus</th>
                          <th class="w-1/20 py-4 ...">Conexion</th>
                          <th class="w-1/20 py-4 ...">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($pcs as $row)
                          <tr>
                              <td class="py-3 px-6">{{$row->id}}</td>
                              <td class="p-3">{{$row->Num}}</td>
                              <td class="p-3 text-center">{{$row->Marca}}</td>
                              <td class="p-3 text-center">{{$row->Monitor}}</td>
                              <td class="p-3 text-center">{{$row->RAM}}</td>
                              <td class="p-3 text-center">{{$row->Procesador}}</td>
                              <td class="p-3 text-center">{{$row->Estatus}}</td>
                              <td class="p-3 text-center">{{$row->Conexion}}</td>
                              <td class="p-3 flex justify-center">
                                  <form action="{{ route('products.destroypc', $row->id) }}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                      <i class="fas fa-trash"></i></button>
                                  <form>
                                  <a href="{{ route('products.editpc', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                  <i class="fas fa-pen"></i></a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>

@endsection