<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    {{-- live chat --}}
    <script>
        function initFreshChat() {
          window.fcWidget.init({
            token: "9d7688fe-86fa-4025-ab5f-de6c1f6addbf",
            host: "https://wchat.freshchat.com"
          });
        }
        function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
      </script>


    <header class="header-main">
        <a href="/" class="btn btn-primary">Back</a>

        <a href="{{route('all-news-view')}}">
        <div class="header-search">
            <i class="fas fa-search">    Search</i>

        </div>
        </a>

    </header>
    <meta charset="utf-8">
    <title>News</title>
    <link rel="stylesheet" href="{{asset('/css/browsenews.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  </head>
  <body>

    <div class="container1">
        {{-- <h2>Latest News</h2> --}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{asset('/storage/images/201130-donald-trump-2x1-jm-1222_a39937721a1f98d159b8dab55ccd9a7a.fit-2000w.jpg')}}" width="100%">
                    <div class="carousel-caption">
                        <h3>Your Caption</h3>
                        <p>news details</p>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('/storage/images/_116262541_mediaitem116262539.jpg')}}" width="100%">
                    <div class="carousel-caption">
                        <h3>News Headline</h3>
                        <p>News Details</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('/storage/images/_116163439_hi064851050-1.jpg')}}" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>
                  </div>


            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>

        </div>
    </div>




    <div class="all-news">
      <div class="news">
        <h2>news1</h2>
        <img src="{{asset('/storage/images/201130-donald-trump-2x1-jm-1222_a39937721a1f98d159b8dab55ccd9a7a.fit-2000w.jpg')}}" width="100%">
        <p>oisaudhfaiousdhfaposdadoushfasdofcasc asdoufhsa dpfuasdfpa dusfhpadufasdp fiouasd fpoadusf ouf dsaofhy</p>
        <a href="#" class="btn btn-danger">Read More</a>
      </div>
      <div class="news">
        <h2>news2</h2>
      </div>
      <div class="news">
        <h2>news3</h2>
      </div>
      <div class="news">
        <h2>news4</h2>
      </div>
    </div>

    <div class="all-news1">
      <div class="news">
        <h2>news1</h2>
      </div>
      <div class="news">
        <h2>news2</h2>
      </div>
      <div class="news">
        <h2>news3</h2>
      </div>
      <div class="news">
        <h2>news4</h2>
      </div>
    </div>

    <div class="all-news2">
      <div class="news">
        <h2>news1</h2>
      </div>
      <div class="news">
        <h2>news2</h2>
      </div>
      <div class="news">
        <h2>news3</h2>
      </div>
      <div class="news">
        <h2>news4</h2>
      </div>
    </div>


    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

  </body>
</html>
