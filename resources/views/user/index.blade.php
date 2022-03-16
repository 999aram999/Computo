@extends('layouts.app')

@section('content')

@section('content')


    <h1 class="text-5xl text-center pt-24">Bienvenido a los tickets existentes</h1>
    <div class="flex justify-center flex-wrap mt-16 mx-12">
        @foreach ($images as $row)
        <div class="w-4/14 p-4 bg-blue-500 hover:text-white mx-1">
            <p>

                <ul class="text-white text-center">
                    <li><i class="fa-solid fa-list" > Laboratorio:<br><br> {{ $row->titulo }}<br><br></i></li>
                    <li><i class="fa-solid fa-list" > Num serie PC:<br><br> {{ $row->autor }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Fecha:<br><br> {{ $row->editorial }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> estatus:<br><br> {{ $row->categoria }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Servicio a realizar:<br><br> {{ $row->estatus }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Programas:<br><br> {{ $row->reseña }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Problemas:<br><br> {{ $row->avance }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Mantenimiento posterior:<br><br> {{ $row->comAvance }}<br><br></i></li>
                    <li><i class="fa-solid fa-list"> Comentarios:<br><br> {{ $row->metaAnual }}<br><br></i></li>
                </ul>
                {{-- <div class="container">
                    <div class="start-widget">
                        <input type="radio" name="rate" id="rate-5">
                         <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4">
                         <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3">
                         <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2">
                         <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1">
                         <label for="rate-1" class="fas fa-star"></label>
                    </div>
                </div> --}}
            </p><br>

            {{-- <img class="w-full h-4/5" src="ImgU/{{ $row->imageU }}" alt="imageU"> --}}
        </div>
            {{-- <div class="w-4/12 p-4 hover:bg-blue-500 hover:text-white">
                <p>

                    <ul class="text-white text-center">
                        <li><i class="fa-solid fa-book" >: {{ $row->titulo }} </i></li>
                        <li><i class="fa-solid fa-user" >: {{ $row->autor }}</i></li>
                        <li><i class="fa-solid fa-newspaper">: {{ $row->editorial }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->categoria }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->estatus }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->reseña }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->avance }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->comAvance }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->metaAnual }}</i></li>
                    </ul>
                    <div class="container">
                        <div class="start-widget">
                            <input type="radio" name="rate" id="rate-5">
                             <label for="rate-5" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-4">
                             <label for="rate-4" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-3">
                             <label for="rate-3" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-2">
                             <label for="rate-2" class="fas fa-star"></label>
                            <input type="radio" name="rate" id="rate-1">
                             <label for="rate-1" class="fas fa-star"></label>
                        </div>
                    </div>
                </p><br>

                <img class="w-full h-4/5" src="img/{{ $row->image }}" alt="Image">
            </div> --}}
        @endforeach
    </div>

@endsection