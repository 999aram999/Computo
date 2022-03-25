@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <nav class="h-16 flex justify-end py-4 px-16">
        {{-- <a href="{{ route('products.index') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Laboratorios y PC</a>

        <a href="{{ route('products.create') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Add Laboratorio o PC</a> --}}
    </nav>
    <h1 class="text-5xl text-center pt-24">Agregar Mis Preguntas y Respuestas</h1><br><br>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-100
                rounded-lg shadow-xl">
        <h1 class="text-3xl text-center dont-bold">Registrar</h1>
    
        <form class="mt-4" method="POST" action="{{ route('products.store') }}">
            @csrf
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Titulo"
            id="titulo" name="titulo">
    
            @error('titulo')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Descripcion"
            id="autor" name="autor">
    
            @error('autor')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Categoria"
            id="editorial" name="editorial">
    
            @error('editorial')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
             
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Respuesta"
            id="lpublicacion" name="lpublicacion">
    
            @error('lpublicacion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    {{--
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="apublicacion"
            id="apublicacion" name="apublicacion">
    
            @error('apublicacion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="categoria"
            id="categoria" name="categoria">
    
            @error('categoria')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror --}}
    
            <button type="submit" class="rounded-md bg-blue-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-blue-600">Send</button>
    
        </form>
    </div>

@endsection