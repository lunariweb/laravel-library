
  @extends('sidebars.adminSidebar')

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

  <!-- <title> Admin Dashboard </title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <!-- Scripts -->


  <link rel="stylesheet" type="text/css" href="{{asset('/css/admin-dashboard-style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >



</head>



    <div class="blockholder"> <!--designing blocks to create dashboard data panels -->
      <div class="block">

        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">


            <h2>{{ $num_users->count() }}/1000</h2>


          <h3>Users Registered</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('admin-manage-users-view')}}">Manage</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-book" aria-hidden="true"></i>


        </div>
        <div class="block-text">

            <h2>{{ $num_books->count() }}/5000</h2>




          <h3>Books</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('admin-manage-books-view')}}">Manage</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">

            <h2>{{ $num_admins->count() }}/10</h2>





          <h3>Admins</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="{{route('admin-manage-admins-view')}}">View</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-id-card" aria-hidden="true"></i>


        </div>
        <div class="block-text">


          <h2>#OLAD2020_{{ Auth::user('admin')->id }}</h2> <!--generating a library issued id for the admin -->
          <h3>Admin ID Card</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>View</h3>

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
          <button>Connect</button>
      </div>

      <div class="messenger">

      <!-- icon -->
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <!-- name -->
          <h2>Cloud Library Messenger</h2>
          <!-- button -->
          <button onclick="document.location='https://cloud-library-messenger-cfa4f.web.app/'">Connect</button>

      </div>
    </section>


 @endsection

 @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

</html>
