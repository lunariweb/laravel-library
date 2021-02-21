
@extends('sidebars.sidebar_browse')

@section('sidebar')

<head>
    {{-- live chat --}}
    <script>
      function initFreshChat() {
        window.fcWidget.init({
          token: "e225117c-4e63-4e04-a322-b88c383e142b",
          host: "https://wchat.freshchat.com"
        });
      }
      function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
    </script>
    <!--- meta lines to make the programm resposive------------------->
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!--- --------------------------------------------------------------------------------------->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Browse</title>







    <link rel="stylesheet" type="text/css" href="{{asset('/css/style6.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >



    <!-- java scrpit jQuery link--------------------->

</head>






    <!-- navigation of the library (not the main navigation ---->

    <nav>
        <h1>Comics</h1>
        <a href="#" class="logo">
          {{-- <img src="#" alt=""> --}}
        </a>

        <!--- Button at the menu---------------------------------------------------->
        <!--<input type="checkbox" class="menu-btn" id="menu-btn"/>    optional----------------->
      <!--  <label class="menu-icon" for="menu-btn"> ------------>
        <!--  <span class="nav-icon"></span> ----------->
      <!--- </label>-------------------->



        <!-- menu of the library browser --->
<!--- - to be completed in sprint 3----------------------------------------------------->
        <ul class="menu">
          <li><h1>Comics</h1></li>
          <li><a href="{{route('user-browse')}}" class="all">All</a></li>
          <li><a href="{{route('user-browse-fantasy')}}">Fantasy</a></li>
          <li><a href="{{route('user-browse-novels')}}">Novels</a></li>
          <li><a href="#">Comics</a></li>
          <li><a href="{{route('user-browse-adventure')}}">Adventure</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <a href="{{route('search-books')}}" class="search-books-btn">Search</a>
          <i class="fa fa-search" aria-hidden="true"></i>

        </div>
    </nav>




    
    <section id="books-list"> <!--- change this to books list later--------------------------------------->
      {{-- start comics --}}

    <!--- box 16------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">2020</div>
        <img src="{{asset('storage/covers/QpdMNOp8gaX.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://files.openpdfs.org/QpdMNOp8gaX.pdf#pdfjs.action=download">
      Batman & Spiderman

    </a>

    </div>

    <!--- box 17------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">#001</div>
        <img src="{{asset('storage/covers/EBgjeXNkdoN.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://pdfroom.com/preview/books/ultimate-spiderman-001/EBgjeXNkdoN#page=7&zoom=auto,-19,792">
      Ultimate Spiderman

    </a>

    </div>

     <!--- box 18------------------------>
     <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">#002</div>
        <img src="{{asset('storage/covers/zk2Aqbpy2PJ.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://pdfroom.com/preview/books/ultimate-spiderman-002/zk2Aqbpy2PJ#page=1&zoom=auto,-19,792">
      Ultimate Spiderman

    </a>

    </div>

    <!--- box 19------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Marvel</div>
        <img src="{{asset('storage/covers/c5c59beb976e101520d2a673bb974060.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfdrive.com/download.pdf?id=164333576&h=80f706d8419f055ca7f0c92f412634d7&u=cache&ext=pdf">
      Marvel Encyclopedia

    </a>

    </div>

    <!--- box 20------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Marvel</div>
        <img src="{{asset('storage/covers/91Q5FQH5oIL.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="http://images.abovethetreeline.com/ea/TW/pdfs/MARVEL-CATALOG-JAN-APR2016.pdf">
      marvel's captain america

    </a>

    </div>
    {{-- end comics --}}







    </section>

  

  <!--- Footer ------------------------------------------------------------------------------------------------------->

  <footer>
    <p>Online Library, A Project Of SLTC</p>
    <p>Copyright 2020 - Team Dominators (SLTC)</p>
  </footer>




  @endsection

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection


</html>
