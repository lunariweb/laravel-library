<!DOCTYPE html>

<html lang="en">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/add-books-page-style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add Books</title>
</head>
<body>

    @extends('sidebars.adminSidebar_addbooks')

    @section('sidebar')

    @endsection

<div class="addbooks-main">



    <div class="container">
        <h1>Add New Books</h1>
        <div class="form-group ml-3 mr-3">
            <form action="{{route('add-books-submit')}}" method="post" class="add-books-form">
                @csrf
                <label>Book Name: </label>
                <input type="text" name="book_name" placeholder="Enter book name" class="form-control mb-2" required>
                <label>Book Type: </label>
                <input type="text" name="book_type" placeholder="Enter book type" class="form-control mb-2" required>
                <label>Book Link: </label>
                <input type="text" name="book_link" placeholder="Enter book link" class="form-control mb-2" required>

                <input type="submit" class="btn" value="Create">
            </form>
        </div>

    </div>

</div>

    @extends('layouts.pre-loader')       {{--preloader --}}
    @section('pre-loader')

    @endsection

</body>
</html>
