@extends('sidebars.sidebar_userSettings')

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


<div class="user__settings">

<div class="form-holder">
    <form action="{{route('userProfileImgSubmit', $user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('patch') --}}

        <div class="image__section">
        <img src="/storage/images/{{Auth::user('User')->image}}" width="120" alt="" class="profile__img" />
        <input type="file" name="image" class="image" required>
        </div>

        <div class="sections">

        <div class="left__section">
            <input type="text" name="name" value="{{Auth::user('User')->name}}" class="name">
            <input type="text" name="email" value="{{Auth::user('User')->email}}" class="email" disabled>
            <!-- <input type="text" name="job_title" value="" class="job_title" disabled> -->
            {{-- <input type="text" name="password" value=""> --}}
            <input type="text" name="fullname" placeholder="Enter your full name" value="{{Auth::user('User')->fullname}}" class="fullname">
            <input type="text" name="address" placeholder="Enter your address" class="address" value="{{Auth::user('User')->address}}">

        </div>

        <div class="right__section">
            <input type="text" name="birthday" placeholder="Enter your Birthday" class="birthday" value="{{Auth::user('User')->birthday}}">
            <input type="text" name="age" placeholder="Your Age" class="age" value="{{Auth::user('User')->age}}">
            <input type="text" name="gender" placeholder="Male or Female" class="gender" value="{{Auth::user('User')->gender}}">
            <input type="number" name="mobile" placeholder="Your mobile number" class="mobile" value="{{Auth::user('User')->mobile}}">

        </div>
        </div>
        
        <div class="bottom__section">
            <input type="submit" value="submit">

        </div>
    </form>

</div>

</div>


</div>


@endsection

@extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection




</html>
