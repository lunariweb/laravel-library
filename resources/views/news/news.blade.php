<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/news-page-style.css')}}">
    <title>News</title>
    <script>
        function initFreshChat() {
          window.fcWidget.init({
            token: "e225117c-4e63-4e04-a322-b88c383e142b",
            host: "https://wchat.freshchat.com"
          });
        }
        function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
      </script>
</head>
<body>

    <div class="total mb-5">
        <a href="{{route('browse-news')}}" class="btn btn-success mb-2 px-3">Back</a>
        <div class="news-topic">
            <h1>{{$news->headline}}</h1>
        </div>

        <div class="news-source">
            <h3>Source: {{$news->source}}</h3>
        </div>

        <div class="news-author">
            <p>Author: {{$news->author}}, On: {{$news->created_at}}</p>
        </div>
        <hr>
        <div class="news-image">
            <img src="{{asset('/storage/images/' . $news->image)}}" width="1000">
        </div>

        <hr>

        <div class="news-description">
            <p>{{$news->description}}</p>
        </div>
    </div>

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection
</body>
</html>
