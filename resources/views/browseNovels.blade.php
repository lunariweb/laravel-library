
@extends('sidebars.sidebar_browse')

@section('sidebar')

<head>
    {{-- live chat --}}
    {{-- <script>
        function initFreshChat() {
          window.fcWidget.init({
            token: "9d7688fe-86fa-4025-ab5f-de6c1f6addbf",
            host: "https://wchat.freshchat.com"
          });
        }
        function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
      </script> --}}
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
        <h1>Novels</h1>
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
          <li><a href="{{route('user-browse')}}" class="all">All</a></li>
          <li><a href="{{route('user-browse-fantasy')}}">Fantasy</a></li>
          <li><a href="#">Novels</a></li>
          <li><a href="{{route('user-browse-comics')}}">Comics</a></li>
          <li><a href="{{route('user-browse-adventure')}}">Adventure</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <a href="{{route('search-books')}}" class="search-books-btn">Search</a>
          <i class="fa fa-search" aria-hidden="true"></i>

        </div>
    </nav>




    <!--- Books----------------------------------------------------------------->
    <div class="books-heading"> <!--- change this to books later------------------------------------>
      <h2>Books</h2>

    </div>

    <section id="books-list"> <!--- change this to books list later--------------------------------------->
      <!--- box 11------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">2013</div>
        <img src="{{asset('storage/covers/61ed40d6f4d27d0e0857815091ef0405c9e8d05f__300x0.jpeg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.smashwords.com/books/download/336262/1/latest/0/0/cactus-land.pdf">
      Cactus Land

    </a>

    </div>

    <!--- box 12------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">2013</div>
        <img src="{{asset('storage/covers/d8f08c5bd111a3301c786525fa3fb70c9795b648__300x0.jpeg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.smashwords.com/books/download/315429/1/latest/0/0/laura-and-the-jaguar-prophecy.pdf">
      Laura and The Jaguar Prophecy
    </a>

    </div>

    <!--- box 12------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">2013</div>
        <img src="{{asset('storage/covers/caec53248eebe9e147bc425cf231ae03d21e1ca7__300x0.jpeg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.smashwords.com/books/download/387293/8/latest/0/0/joseph-carl-spratt-and-the-great-white-fleet.epub">
      Joseph Carl Spratt and the Great White Fleet

    </a>

    </div>

    <!--- box 13------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Golden</div>
        <img src="{{asset('storage/covers/51-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=51.epub">
      The Call Of The Wild

    </a>

    </div>

    <!--- box 14------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="{{asset('storage/covers/53-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=53.epub">
      Les Miserables

    </a>

    </div>

    <!--- box 15------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="{{asset('storage/covers/59-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=59.epub">
      Peter and Wendy

    </a>

    </div>

    {{-- end Novels --}}







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
