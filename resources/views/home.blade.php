@extends('sidebars.sidebar')

@section('sidebar')
  <!--end of the header file ---------------------------------------------------------------------------------------------------------------------->
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <title> Dashboard </title>
  <link rel="stylesheet" type="text/css" href="{{asset('/css/style5.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
</head>


<!-- creating blocks to hold the data for the Dashboard-->
    <div class="blockholder">
      <div class="block">

        <div class="block-icon">
          <i class="fa fa-book" aria-hidden="true"></i>


        </div>
        <div class="block-text">

          <h2>News</h2>
          <h3>Access To News</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a class="btn alert-success" href="{{route('browse-news')}}">View</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-id-card" aria-hidden="true"></i>


        </div>
        <div class="block-text">
            <h2>#OLUS2020_{{ Auth::user()->id }}</h2>


        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('user-settings')}}">Details</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">
            <h2>{{Auth::user()->name}}</h2>

        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('user-settings')}}">Change</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-briefcase" aria-hidden="true"></i>


        </div>
        <div class="block-text">
          <h2>Profile</h2>
          <h3>Personal Profile</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('user-settings')}}">Customize</a></h3>

          </div>

        </div>

      </div>

    </div>

    <section class="social_media_options">
      <div class="clsm">
          <!-- icon -->
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          <!-- name -->
          <h2>Cloud Library Feedback System</h2>
          <!-- button -->
          <button onClick="document.location='http://localhost:3001/'">Connect</button>
      </div>

      <div class="messenger">

      <!-- icon -->
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <!-- name -->
          <h2>Cloud Library Messenger</h2>
          <!-- button -->
          <button onClick="document.location='http://localhost:3000/'">Connect</button>

      </div>
    </section>

    @endsection

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection




</html>
