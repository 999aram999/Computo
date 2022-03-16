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
        <p class="text-2xl font-bold"><a href="http://localhost/Escuela/public/">Mantenimiento de computo</a></p>
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
          <li clas="mx-8">
            <p class="text-xl mx-8"> Bienvenido <b>{{ auth()->user()->name }} </b></p>
          </li>
          @if(auth()->user()->role == 'admin'){{--{{ auth()->user()->role }} == 'admin' --}}
            <li clas="mx-6">
              <a href="{{route('products.index')}}" class="font-semibold hover:bg-white py-3 px-4 rounded-md mx-1 border-2 border-white hover:text-blue-700">LB y PC</a>
            </li>
            <li>
              <a href="{{route('user.index')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-10">Tickets</a>
            </li>  
          @endif
          @if(auth()->user()->role == 'user')
          <li>
            {{-- admin.HomeU --}}
            <a href="{{route('user.index')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-5">Tickets</a>
          </li>
            {{-- admin.createU --}}
          <li>
            <a href="{{route('user.create')}}" class="font-semibold border-2 border-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-700 mx-5">Add Ticket</a>
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
    <style>

      /* .container
      {
          width: 100%;
          height: 70%;
          background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/headerr.jpg);
          background-position: center;
          background-size: cover;
          padding-left: 8%;
          padding-top: 2%;
          padding-bottom: 3%;
          padding-right: 8%;
          box-sizing: border-box;
      }
      .navbar
      {
          height: 12%;
          display: flex;
          align-items: center;
      }
      .logo
      {
          width: 130px;
          cursor: pointer;
      }
      .menu-icon
      {
          width: 30px;
          cursor: pointer;
          margin-left: 40px;
      }
      nav
      {
          flex: 1;
          text-align: right;
      }
      nav ul li
      {
          list-style: none;
          display: inline-block;
          margin-left: 60px;
      }
      nav ul li a
      {
          text-decoration: none;
          color: #fff;
          font-size: 15px;
      } */
      /* .con
      {
          padding-top: 0%;
      } */
      .cont{
          margin: auto;
          background-color: white;
          width: 800px;
          
          padding: 30px;
      }
  
      /* ul, li {
          padding: 0;
          margin: 0;
          list-style: none;
      } */
  
      ul.slider{
      position: relative;
      width: 740px;
      height: 300px;
      }
  
      ul.slider li {
          position: absolute;
          left: 0px;
          top: 0px;
          opacity: 0;
          width: inherit;
          height: inherit;
          transition: opacity .5s;
          background:#fff;
      }
  
      ul.slider li img{
      width: 100%;
      height: 300px;
      object-fit: cover;
      }
  
      ul.slider li:first-child {
          opacity: 1; /*Mostramos el primer <li>*/
      }
  
      ul.slider li:target {
          opacity: 1; /*Mostramos el <li> del enlace que pulsemos*/
      }
  
      .menu{
      text-align: center;
      margin: 20px;
      }
  
      .menu li{
      display: inline-block;
      text-align: center;
      }
  
      .menu li a{
      display: inline-block;
      color: white;
      text-decoration: none;
      background-color: grey;
      padding: 10px;
      width: 20px;
      height: 20px;
      font-size: 20px;
      border-radius: 100%;
      }
      /* .footer
      {
          padding-left: 8%;
          padding-top: 2%;
          padding-bottom: 3%;
          padding-right: 8%;
          flex: 1;
          text-align: center;
          background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/headerr.jpg);
      }
      .footer ul li
      {
          list-style: none;
          margin-left: 60px;
      }
      .footer ul li a
      {
          text-decoration: none;
          color: #fff;
          font-size: 15px;
      } */
  
  </style>
  @yield('content')
  </body>
</html>