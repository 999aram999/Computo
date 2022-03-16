@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <nav class="h-16 flex justify-end py-4 px-16">
        {{--  
        <a href="{{ route('products.indexpc') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Laboratorios y PC</a>

        <a href="{{ route('products.createpc') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Add Laboratorio o PC</a>
    --}}
    </nav>
    <h1 class="text-5xl text-center pt-24">Bienvenido a la creacion de PC</h1><br><br>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-100
    rounded-lg shadow-xl">
        <h1 class="text-3xl text-center dont-bold">Registrar Computadora</h1>

        <form class="mt-4" method="POST" action="{{ route('products.storepc') }}">
            @csrf

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Num serie"
            id="Num" name="Num">

            @error('Num')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Marca"
            id="Marca" name="Marca">

            @error('Marca')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Monitor"
            id="Monitor" name="Monitor">

            @error('Monitor')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="RAM"
            id="RAM" name="RAM">

            @error('RAM')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Procesador"
            id="Procesador" name="Procesador">

            @error('Procesador')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Estatus"
            id="Estatus" name="Estatus">

            @error('Estatus')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Conexion"
            id="Conexion" name="Conexion">

            @error('Conexion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <button type="submit" class="rounded-md bg-blue-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-blue-600">Send</button>

        </form>
    </div>

@endsection