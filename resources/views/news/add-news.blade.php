<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/add-news-style.css')}}">
    <title>Add News</title>


    <style>
        texarea {
            white-space: pre-wrap;
        }
    </style>
</head>
<body>

    @extends('sidebars.adminSidebar_addNews')

    @section('sidebar')

    @endsection

    <div class="container">

        <div id="form-holder" class="form-container border px-4 mt-xl-5">
            <h1 class="text-left mt-2 pt-3">Add News</h1>
            <hr>
            {{--  --}}
         @if(session()->has('message'))
         <div class="alert alert-success">{{session()->get('message')}}</div>

         @elseif(session()->has('error'))
         <div class="align-center alert alert-danger">{{session()->get('message')}}</div>

         @endif
          {{--  --}}
            <form action="{{route('admin-add-news-submit')}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf

                <label>News Headline: </label>
                <input name="headline" type="text" class="form-control mb-2" placeholder="Enter News Headline">

                <label>News Author: </label>
                <input name="author" type="text" class="form-control mb-2" placeholder="Enter the author">

                <label>News Source: </label>
                <input name="source" type="text" class="form-control mb-2" placeholder="Enter the source">

                <label>Images: </label>
                <input name="image" type="file" class="form-control mb-4">

                <label>Short Description (For All News View): </label>
                <input name="shortdes" type="text" class="form-control mb-2" placeholder="Enter a short description">

                <label>News Description: </label>
                <textarea name="description" cols="30" rows="10" wrap="hard" class="form-control mb-4 overflow-auto" placeholder="Describe the news"></textarea>

                <input id="btn" type="submit" class="btn btn-success px-5" value="Submit News">

            </form>
        </div>
    </div>

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection
</body>
</html>
