@extends('sidebars.sidebar_request')

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

    <title>Request a book</title>

    <link rel="stylesheet" href="{{asset('/css/style-book-request.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

  </head>


  <div class="request">



    <div class="contact-title">

      <h1>Can't Find The Book?</h1>
      <h2>Send Us A Request, So We Can Add The Book</h2>

    </div>

    <div class="contact-form"> <!--creating a form to request books -->

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
      <form id="contact-form" method="post" action="{{route('send-email')}}">
        @csrf
        <input name="name" type="text" class="form-control" placeholder="Your Name" required> <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

          <textarea name="message" class="form-control" placeholder="Your Request" rows="8" required></textarea><br>

          <input type="submit" class="form-control-submit" value="SEND REQUEST">


      </form>

    </div>

</div>





  @endsection

  @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection






</html>
