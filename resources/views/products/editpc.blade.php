@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{ route('products.index') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Productos</a>

        <a href="{{ route('products.create') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear</a>
    </nav>
    <h1 class="text-5xl text-center pt-24">Bienvenido a la edicion para administrador </h1><br><br>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-100
                rounded-lg shadow-xl">
        <h1 class="text-3xl text-center dont-bold"> Editar Libro {{ $product->id }}</h1>
    
        <form class="mt-4" method="POST" action="{{ route('products.updatepc', $product->id) }}">
            @csrf
            @method('PUT')
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="titulo"
            id="titulo" name="titulo" value="{{ $product->titulo }}">
    
            @error('titulo')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="autor"
            id="autor" name="autor" value="{{ $product->autor }}">
    
            @error('autor')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="editorial"
            id="editorial" name="editorial" value="{{ $product->editorial }}">
    
            @error('editorial')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="lpublicacion"
            id="lpublicacion" name="lpublicacion" value="{{ $product->lpublicacion }}">
    
            @error('lpublicacion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="apublicacion"
            id="apublicacion" name="apublicacion" value="{{ $product->apublicacion }}">
    
            @error('apublicacion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="categoria"
            id="categoria" name="categoria" value="{{ $product->categoria }}">
    
            @error('categoria')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <button type="submit" class="rounded-md bg-blue-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-blue-600">Send</button>
    
        </form>
    </div>

@endsection