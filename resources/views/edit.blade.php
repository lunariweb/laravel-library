<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/edit-page-style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Books</title>
</head>
<body>

    <a href="{{route('admin-manage-books-view')}}" class="btn btn-primary px-5 ml-4 mt-5">Back</a>
    <h1>Edit Books</h1>

<div class="container">
    <div class="form-group">
        <form action="{{route('book.update', $book->id)}}" method="post">
            @csrf
            @method('patch')
            <label>Book Name: </label>
            <input type="text" name="book_name" value="{{$book->book_name}}" class="form-control mb-2">
            <label>Book Type: </label>
            <input type="text" name="book_type" value="{{$book->book_type}}" class="form-control mb-2">
            <label>Book Link: </label>
            <input type="text" name="book_link" value="{{$book->book_link}}" class="form-control mb-2">
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</div>

@extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

</body>
</html>
