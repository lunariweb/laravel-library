<!DOCTYPE html>
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
    <link rel="stylesheet" href="{{asset('/css/edit-page-style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Users</title>
</head>
<body>

    <a href="{{route('admin-manage-users-view')}}" class="btn btn-primary px-5 ml-4 mt-5">Back</a>
    <h1>Edit Users</h1>

<div class="container">
    <div class="form-group">
        <form action="{{route('user.update', $user->id)}}" method="post">
            @csrf
            @method('patch')
            <label>User Name: </label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control mb-2">
            <label>User Email: </label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control mb-2">

            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</div>

@extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

</body>
</html>
