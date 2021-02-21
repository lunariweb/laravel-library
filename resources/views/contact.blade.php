@extends('sidebars.sidebar_contact')

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

  <title>Contact Us</title>

  <link rel="stylesheet" href="{{asset('/css/contact-us-style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

</head>

<div class="contact">


    <div class="contact-title"> <!--creating basic form holder and creating the form -->

      <h1>Having Issues?</h1>
      <h2>Send Us A Message, We will get back to you</h2>

    </div>

    <div class="contact-form">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <button class="close" type="button" data-dismiss="alert">x</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>

            </div>

        @endif

      <form id="contact-form" method="post" action="{{route('send-contact-mail')}}">
          @csrf
        <input name="name" type="text" class="form-control" placeholder="Your Name" required> <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
        <input type="text" name="mobile" class="form-control" placeholder="Your Mobile Number" required><br>

          <textarea name="message" class="form-control" placeholder="Your Message" rows="8" required></textarea><br>

          <input type="submit" class="form-control-submit" value="SEND REQUEST" onclick=" return checkemail()">


      </form>

    </div>

</div>

    <script type="text/javascript">

    function checkemail() {

      return confirm('Email Sent Succesfully');
    }

    </script>
  @endsection

  @extends('layouts.pre-loader')
  @section('pre-loader')

  @endsection





</html>
