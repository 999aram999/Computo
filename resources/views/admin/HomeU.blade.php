@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    .container .start-widget input
    {
      display: none;
    }
    .start-widget label 
    {
      font-size: 40px;
      color: #444;
      padding: 10px;
      float: right;
      transition: all 0.2s ease;
    }
    input:not(:checked) label:hover,
    input:not(:checked) label:hover label
    {
      color: #fd4;
    }
    input::checked label
    {
      color: #fd4;
    }
    input#rate-5:checked label
    {
      color: #fe7;
      text-shadow: 0 0 20px #952;
    }
    input:checked form
    {
      display: block;
    }
  </style> --}}
    <h1 class="text-5xl text-center pt-24">Bienvenido a los tickets existentes</h1>
    <div class="flex justify-center flex-wrap mt-16 mx-12">
        @foreach ($imageU as $row)
            <div class="w-4/12 p-4 hover:bg-blue-500 hover:text-white">
                <p>

                    <ul class="text-white text-center">
                        <li><i class="fa-solid fa-list" >Laboratorio: {{ $row->titulo }} </i></li>
                        <li><i class="fa-solid fa-list" >Num serie PC: {{ $row->autor }}</i></li>
                        <li><i class="fa-solid fa-list">Fecha: {{ $row->editorial }}</i></li>
                        <li><i class="fa-solid fa-list">estatus: {{ $row->categoria }}</i></li>
                        <li><i class="fa-solid fa-list">Servicio a realizar: {{ $row->estatus }}</i></li>
                        <li><i class="fa-solid fa-list">Programas: {{ $row->reseña }}</i></li>
                        <li><i class="fa-solid fa-list">Problemas: {{ $row->avance }}</i></li>
                        <li><i class="fa-solid fa-list">Mantenimiento posterior: {{ $row->comAvance }}</i></li>
                        <li><i class="fa-solid fa-list">Comentarios: {{ $row->metaAnual }}</i></li>
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
        @endforeach
    </div>
@endsection