
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
    
    
    <!--- --------------------------------------------------------------------------------------->


    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>Browse</title>

    <link rel="stylesheet" type="text/css" href="{{asset('/css/style6.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >



   

</head>



    <!-- navigation of the library (not the main navigation ---->

    <style>
      .menu {
        margin-left: 350px;
      }
    </style>

    <nav>
        
    
        <ul class="menu">
          <li><h1>All Books</h1></li>
          <li><a href="#" class="all">All</a></li>
          <li><a href="{{route('user-browse-fantasy')}}">Fantasy</a></li>
          <li><a href="{{route('user-browse-novels')}}">Novels</a></li>
          <li><a href="{{route('user-browse-comics')}}">Comics</a></li>
          <li><a href="{{route('user-browse-adventure')}}">Adventure</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <a href="{{route('search-books')}}" class="search-books-btn">Search</a>
          <i class="fa fa-search" aria-hidden="true"></i>

        </div>
    </nav>




    

    <section id="books-list"> <!--- change this to books list later--------------------------------------->

      

      {{-- category fantasy --}}
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

    {{-- end fantasy --}}

    {{-- start Novels --}}

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

    {{-- end comics --}}

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

    <footer>
      <p>Online Library, A Project Of SLTC</p>
      <p>Copyright 2020 - Team Dominators (SLTC)</p>
    </footer>
  






  @endsection

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection


</html>
