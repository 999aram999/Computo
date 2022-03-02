<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Biblioteca</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css2?
        family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/dfe85d73e7.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  </head>
  <body class="bg-white text-gray-800">
    <nav class="flex py-5 bg-blue-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold"><a href="http://localhost/Biblioteca/public/">Biblioteca</a></p>
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
          <li clas="mx-8">
            <p class="text-xl mx-8"> Bienvenido <b>{{ auth()->user()->name }} </b></p>
          </li>
          @if(auth()->user()->role == 'admin'){{--{{ auth()->user()->role }} == 'admin' --}}
            <li clas="mx-6">
              <a href="{{route('products.index')}}" class="font-semibold hover:bg-white py-3 px-4 rounded-md mx-1 border-2 border-white hover:text-blue-700">Galeria</a>
            </li>
            <li>
              <a href="{{route('admin.create')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-10">Add Img</a>
            </li>  
          @endif
          @if(auth()->user()->role == 'user')
          <li>
            {{-- admin.HomeU --}}
            <a href="{{route('user.index')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-5">Perfil</a>
          </li>
            {{-- admin.createU --}}
          <li>
            <a href="{{route('user.create')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-5">Add libro</a>
          </li> 
          @endif
          <li>
          <a href="{{route('login.destroy')}}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
          </li>
        @else
          <li clas="mx-6">
            <a href="{{route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesion</a>
          </li>
          <li>
            <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
          </li>     
        @endif
      </ul>
    </nav>
  @yield('content')
  </body>
</html>