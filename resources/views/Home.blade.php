@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Bienvenido a la biblioteca web</h1>
    <div class="flex justify-center flex-wrap mt-16 mx-12">
        @foreach ($images as $row)
            <div class="w-4/12 p-4 hover:bg-blue-500 hover:text-white">
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