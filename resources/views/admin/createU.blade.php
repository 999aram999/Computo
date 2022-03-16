@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
    <h1 class="text-5xl text-center pt-24"> Agregar libro a mi perfil </h1>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-100
        rounded-lg shadow-xl">
        <form action="/Biblioteca/public/admin/createU" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" class="text-lg my-12" accept="image/*" name="imageU"><br>
            <input type="submit" class="my-12 w-48 text-center p-3 
            text-lg text-white bg-blue-500 rounded hover:bg-blue-600" 
            value="Add Imagen">
            {{-- </form> --}}
            <div class=" ">
                <h1 class="text-3xl text-center dont-bold">Registrar Libro</h1>
        
                <form class="mt-4">{{--<form class="mt-4" method="POST" action="{{ route('products.store') }}">--}}
                    
            
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Laboratorio"
                    id="titulo" name="titulo">
            
                    @error('titulo')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
            
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Num serie PC"
                    id="autor" name="autor">
            
                    @error('autor')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
            
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Fecha"
                    id="editorial" name="editorial">
            
                    @error('editorial')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
            
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="estatus"
                    id="categoria" name="categoria">
            
                    @error('categoria')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Servicio a realizar"
                    id="estatus" name="estatus">
            
                    @error('estatus')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Programas"
                    id="reseña" name="reseña">
            
                    @error('reseña')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Problemas"
                    id="avance" name="avance">
            
                    @error('avance')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Mantenimiento posterior"
                    id="comAvance" name="comAvance">
            
                    @error('comAvance')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Comentarios"
                    id="metaAnual" name="metaAnual">
            
                    @error('metaAnual')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror
            
                </form>
            </div>
        </form>
    </div>
@endsection