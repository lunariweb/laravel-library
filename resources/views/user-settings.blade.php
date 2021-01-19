@extends('sidebars.sidebar_userSettings')

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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Scripts -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <title>User Settings</title>

  <link rel="stylesheet" href="{{asset('/css/user-settings-style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

</head>


<div class="userSettings">


    <div class="main-text">
      <h1>Coming On Sprint 4</h1>

    </div>

</div>


@endsection

@extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection




</html>
