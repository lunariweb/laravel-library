
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




    <!--- Books----------------------------------------------------------------->
    <div class="books-heading"> <!--- change this to books later------------------------------------>
      <h2>Books</h2>

    </div>

    <section id="books-list"> <!--- change this to books list later--------------------------------------->
      <!--- box 1------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">1997</div>
          <img src="{{asset('storage/covers/philsophers-stone-uk-childrens-edition-600x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="storage\pdfs\harry_potter_and_the_sorcerers_-_j.k._rowling.pdf" download>
        Harry Potter And The Philsophers Stone
      </a>

      </div>

      <!--- box 2------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">1998</div>
          <img src="{{asset('storage/covers/chamber-of-secrets-uk-childrens-edition-2014-400x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://archive.org/download/1HarryPotterAndTheSorcerersStone/2-harry-potter-and-the-chamber-of-secrets.pdf">
        Harry Potter And The Chamber Of Secrets
      </a>






      </div>

      <!--- box 3------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">1999</div>
          <img src="{{asset('storage/covers/prisoner-of-azkaban-uk-childrens-edition-2014-400x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="http://www.passuneb.com/elibrary/ebooks/HARRY%20POTTER%20AND%20THE%20PRISONER%20OF%20AZKABAN.pdf">
        Harry Potter And The Prisoner Of Azkaban
      </a>

      </div>

      <!--- box 4------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2000</div>
          <img src="{{asset('storage/covers/goblet-of-fire-adult-edition-301x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://mcqueenglish.weebly.com/uploads/3/2/2/6/32260387/harry_potter_and_the_goblet_of_fire.pdf">
        Harry Potter And the Goblet Of Fire
      </a>

      </div>

      <!--- box 5------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2003</div>
          <img src="{{asset('storage/covers/order-of-the-phoenix-us-childrens-edition-2013-600x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://www.missskirtich.com/uploads/2/3/3/7/23374820/5_-_harry_potter_and_the_order_of_the_phoenix_chapter_37.pdf">
        Harry Potter And The Order Of The Phoenix
      </a>

      </div>

      <!--- box 6------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2005</div>
          <img src="{{asset('storage/covers/half-blood-prince-adult-edition-311x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://englishfun.vn/wp-content/uploads/2018/04/6Harry-Potter-and-the-Half-Blood-Prince.pdf">
        Harry Potter And The Half-Blood Prince
      </a>

      </div>

      <!--- box 7------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2007</div>
          <img src="{{asset('storage/covers/deathly-hallows-signature-edition-313x0-c-default.jpg')}}">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://getfreestories.weebly.com/uploads/7/9/0/2/79020522/harry_potter_and_the_deathly_ha_-_j.k._rowling.pdf">
        Harry Potter And The Deathly Hallows
      </a>

    </div>

    <!--- box 8------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="{{asset('storage/covers/81NUBiDacoL.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="http://www.samizdat.qc.ca/arts/lit/PDFs/LionWitchWardrobe_CSL.pdf">
      The Chronicles Of Narnia
    </a>

    </div>

    <!--- box 9------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="{{asset('storage/covers/51EstVXM1UL._SX331_BO1,204,203,200_.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://s3.amazonaws.com/scschoolfiles/112/j-r-r-tolkien-lord-of-the-rings-01-the-fellowship-of-the-ring-retail-pdf.pdf">
      Lord Of The Ring
    </a>

    </div>

    <!--- box 10------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="{{asset('storage/covers/27cf91f605923223613909c7b9d2219f.jpg')}}">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.readingsanctuary.com/wp-content/uploads/2018/10/The-Hobbit-byJ-RR-Tolkien-EBOOK.pdf">
      The Hobbit
    </a>

    </div>







    </section>

  <!--- Buttons on the bottom of the browse page---------------------->
  <div class="btns">
    <a href="#">Previous</a>
    <a href="#">Next</a>

  </div>

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
