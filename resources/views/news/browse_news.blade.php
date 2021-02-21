
<!DOCTYPE html>            {{-- doctype -> document type, means our document is a html document --}}
<html lang="en"> {{-- lang->language = english --}}
  <head> {{-- contains the imports and the dependacies --}}

    <link rel="stylesheet" href="{{ asset('/css/browsenews.css') }}"> {{-- linking the stylesheet --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> {{-- importing the icons from the font awesome library --}}
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
      {{-- live chat end --}}


<title>News</title> {{-- tab name = title --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> {{-- importing bootstrap --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> {{-- importing bootstrap --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> {{-- importing jQuery for the slider in our app --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> {{-- importing bootstrap --}}


    <header class="header-main"> {{-- main top bar --}}

        <a href="/" class="btn btn-primary">Back</a> {{-- hyperlink = a, href = location link, / = welcome page, btn btn-primary = bootstrap code, bootstrap primary = blue color --}}
       
    </header>
    

 

  </head>
  <body>

    <div class="container1">  {{-- classname = class --}}
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel"> {{-- carousel  - slider --}}

            <ol class="carousel-indicators"> {{-- ol = item list --}}
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li> {{-- li=one item of the list  --}}
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active"> {{-- slide 1 --}}
                    <img src="{{asset('/storage/images/201130-donald-trump-2x1-jm-1222_a39937721a1f98d159b8dab55ccd9a7a.fit-2000w.jpg')}}" width="100%">
                    <div class="carousel-caption">
                        <h3>Trump again calls for $2,000 checks as Covid aid bill remains in flux</h3>
                        <p>BBC</p>
                        <a href="/browsenews/19/news" class="btn btn-primary">Read More</a> {{-- man damme --}}
                    </div>
                </div>

                <div class="item"> {{-- slide 2 --}}
                    <img src="{{asset('/storage/images/_116262541_mediaitem116262539.jpg')}}" width="100%">
                    <div class="carousel-caption">
                        <h3>Coronavirus: France finds first case of new variant</h3>
                        <p>BBC</p>
                        <a href="/browsenews/22/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="item"> {{-- slide 3 --}}
                    <img src="{{asset('/storage/images/_116163439_hi064851050-1.jpg')}}" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>737 Max: Air Canada flight in unscheduled landing after engine issue</h3>
                      <p>BBC</p>
                      <a href="/browsenews/20/news" class="btn btn-primary">Read More</a>
                    </div>
                  </div>


            </div>
            {{-- slider buttons --}}
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> {{-- # link = anchor links --}}
                <span class="glyphicon glyphicon-chevron-left"></span> {{-- span = icons add krnna, uses to add special styles --}}
                <span class="sr-only">Previous</span>
              </a>

              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>

        </div>
    </div>


    {{-- row 1  --}}
    <div class="all-news">
      <div class="news">
        <h2>America</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpbTuyIj')}}" width="100%">
        <p>Trump again calls for $2,000 checks as Covid aid bill remains in flux</p>
        <a href="/browsenews/19/news" class="btn btn-danger">Read More</a>
      </div>

      <div class="news">
        <h2>America</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpqMnKtk')}}" width="100%">
        <p>737 Max: Air Canada flight in unscheduled landing after engine issue</p>
        <a href="/browsenews/20/news" class="btn btn-danger">Read More</a>
      </div>

      <div class="news">
        <h2>Russia</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpv6v34k')}}" width="100%">
        <p>George Blake: Soviet Cold War spy and former MI6 officer dies in Russia</p>
        <a href="/browsenews/21/news" class="btn btn-danger">Read More</a>
      </div>
      
      <div class="news">
        <h2>France</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpTxFUfk')}}" width="100%">
        <p>Coronavirus: France finds first case of new variant</p>
        <a href="/browsenews/22/news" class="btn btn-danger">Read More</a>
      </div>
    </div>

      {{-- row 2 --}}
    <div class="all-news1">
      <div class="news">
        <h2>Singapore</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpW1tD3v')}}" width="100%">
        <p>Singapore reveals Covid privacy data available to police</p>
        <a href="/browsenews/24/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>India</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpcfpuRt')}}" width="100%">
        <p>Covaxin: What was the rush to approve India's homegrown vaccine?</p>
        <a href="/browsenews/25/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>China</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/php5rEf7v')}}" width="100%">
        <p>NYSE does a U-turn on Chinese telecoms delistings</p>
        <a href="/browsenews/26/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>World</h2>
        <img src="{{asset('/storage/images/opt/lampp/temp/phpt6uQNu')}}" width="100%">
        <p>Supermarket websites feel the strain of new lockdown</p>
        <a href="/browsenews/27/news" class="btn btn-danger">Read More</a>
      </div>
    </div>

      {{-- row 3 --}}
    <div class="all-news2">
      <div class="news">
        <h2>Georgia</h2>
        <img src="{{asset('/storage/images/tmp/phpbdAyjy')}}" width="100%">
        <p>Georgia PM Giorgi Gakharia quits over order to detain opposition leader</p>
        <a href="/browsenews/31/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>Tech</h2>
        <img src="{{asset('/storage/images/tmp/phpxnYDPv')}}" width="100%">
        <p>Chromebooks overtake Macs in market share for first time</p>
        <a href="/browsenews/32/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>Tech</h2>
        <img src="{{asset('/storage/images/tmp/phpH59Zav')}}" width="100%">
        <p>Trustpilot removed 2.2 million bogus reviews in 2020</p>
        <a href="/browsenews/33/news" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>Tech</h2>
        <img src="{{asset('/storage/images/tmp/phpmMO4zw')}}" width="100%">
        <p>Australia news code: What’s this row with Facebook and Google all about?</p>
        <a href="/browsenews/34/news" class="btn btn-danger">Read More</a>
      </div>
    </div>


    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

  </body>
</html>


