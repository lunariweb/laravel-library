
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
        <h1>Adventure</h1>
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
          <li><a href="{{route('user-browse-novels')}}">Novels</a></li>
          <li><a href="{{route('user-browse-comics')}}">Comics</a></li>
          <li><a href="#">Adventure</a></li>

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
      {{-- start adventure  --}}

    <!--- box 19------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Golden</div>
        <img src="{{asset('storage/covers/56-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=56.epub">
      Treasure Island

    </a>

    </div>

    <!--- box 20------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Mark Twain</div>
        <img src="{{asset('storage/covers/63-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=63.epub">
      Adventures of Huckleberry Finn
    </a>
    </div>

    <!--- box 21------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Alexandre</div>
        <img src="{{asset('storage/covers/71-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=71.epub">
      The Count of Monte Cristo
    </a>
    </div>

    <!--- box 22------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Alexandre</div>
        <img src="{{asset('storage/covers/78-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=78.epub">
      The Three Musketeers
    </a>
    </div>


    <!--- box 23------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">Conan Doyle</div>
        <img src="{{asset('storage/covers/69-250x350.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.pdfbooksworld.com/bibi/pre.html?book=69.epub">
      The Memoirs of Sherlock Holmes
    </a>
    </div>
    {{-- end adventure --}}








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
