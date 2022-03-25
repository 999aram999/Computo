@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">¿¿¿   Sección de Preguntas  ???</h1><br><br>
    {{-- <br><br><br>
    <div class="cont" id="Trabajos">
        <ul class="slider">
            <li id="slide1">
            <img src="img/e3.png"/>
            </li>
            <li id="slide2">
            <img src="img/e2.png"/>
            </li>
            <li id="slide3">
            <img src="img/e1.png"/>
            </li>
        </ul>
        
        <ul class="menu">
            <li>
            <a href="#slide1"></a>
            </li>
            <li>
            <a href="#slide2"></a>
            </li>
            <li>
            <a href="#slide3"></a>
            </li>
        </ul>

    </div><br> --}}
</div>
    <div class="flex justify-center flex-wrap mt-16 mx-12">
        @foreach ($images as $row)
            <div class="w-4/12 p-4 bg-blue-500 text-white">
                <p>

                    <ul class="text-white text-center">
                        <li><i class="fa-solid fa-book" >: {{ $row->titulo }} </i></li>
                        <li><i class="fa-solid fa-user" >: {{ $row->autor }}</i></li>
                        <li><i class="fa-solid fa-newspaper">: {{ $row->editorial }}</i></li>
                        <li><i class="fa-solid fa-list">: {{ $row->categoria }}</i></li>
                    </ul>
                    
                </p><br>

                <img class="w-full h-4/5" src="img/{{ $row->image }}" alt="Image">
            </div>
        @endforeach
    </div>
    
@endsection