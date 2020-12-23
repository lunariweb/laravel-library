<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title> Dashboard </title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style5.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  </head>

  <header>
   <div class="headcontainer">


     <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

     </div>
     <div class="titletext">
       <h2>User Dashboard</h2>
     </div>

     <div class="menu-place1">
       <div class="menu-content1">
         <div class="homeicon">
           <i class="fa fa-home" aria-hidden="true"></i>

         </div>
         <div class="hometext">
           <h4><a href="#">Home</a></h4>
         </div>


       </div>


     </div>
     <div class="menu-place2">
       <div class="menu-content2">
         <div class="icon2">
           <i class="fa fa-user" aria-hidden="true"></i>

         </div>
         <div class="text2">
           <h4><a href="{{route('user-browse')}}">Browse</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place3">
       <div class="menu-content3">
         <div class="icon3">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>

         </div>
         <div class="text3">
           <h4><a href="{{route('user-request-books')}}">Request</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place4">
       <div class="menu-content4">
         <div class="icon4">
           <i class="fa fa-phone" aria-hidden="true"></i>

         </div>
         <div class="text4">
           <h4><a href="{{route('user-contact-admin')}}">Contact</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place5">
       <div class="menu-content5">
         <div class="icon5">
           <i class="fa fa-cog" aria-hidden="true"></i>

         </div>
         <div class="text5">
           <h4><a href="{{route('user-settings')}}">Settings</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place6" href="#">

       <div class="menu-content6">
         <div class="icon6">
           <i class="fa fa-sign-out" aria-hidden="true"></i>

         </div>
         <div class="text6">
            <a class="logout-text" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>




         </div>


       </div>

     </div>



    </div>
   </div>

   </div>
  </header>

  <body>
      @yield('header')
  </body>
