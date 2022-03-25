@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <nav class="h-16 flex justify-end py-4 px-16">
        {{-- <a href="{{ route('products.index') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Productos LB</a> --}}

        <a href="{{ route('products.create') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear LB</a>
    
        {{-- <a href="{{ route('products.indexpc') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Productos PC</a>

        <a href="{{ route('products.createpc') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear PC</a> --}}
    </nav>
    <h1 class="text-5xl text-center pt-24">Bienvenido a la vista para administrador para LB</h1><br><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                        <th class="w-1/20 py-4 ...">ID</th>
                        <th class="w-1/4 py-4 ...">Titulo</th>
                        <th class="w-1/16 py-4 ...">Descripcion</th>
                        <th class="w-1/16 py-4 ...">Categoria</th>
                        <th class="w-1/20 py-4 ...">Respuesta</th>
                        <th class="w-1/20 py-4 ...">Acciones</th>
                        {{-- <th class="w-1/16 py-4 ...">lpublicacion</th>
                        <th class="w-1/16 py-4 ...">apublicacion</th>
                        <th class="w-1/16 py-4 ...">categoria</th>
                        <th class="w-1/20 py-4 ...">Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $row)
                        <tr>
                            <td class="py-3 px-6">{{$row->id}}</td>
                            <td class="p-3">{{$row->titulo}}</td>
                            <td class="p-3 text-center">{{$row->autor}}</td>
                            <td class="p-3 text-center">{{$row->editorial}}</td>
                            <td class="p-3 text-center">{{$row->lpublicacion}}</td>
                            {{-- <td class="p-3 text-center">{{$row->lpublicacion}}</td>
                            <td class="p-3 text-center">{{$row->apublicacion}}</td>
                            <td class="p-3 text-center">{{$row->categoria}}</td> --}}
                            <td class="p-3 flex justify-center">
                                <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                    <i class="fas fa-trash"></i></button>
                                <form>
                                <a href="{{ route('products.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                <i class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection