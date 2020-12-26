<!DOCTYPE html>
<html>
 <head>
  <title>Manage Books</title>
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

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('/css/search-page-style.css')}}">
 </head>
 <body>
     <div class="back-button">
        <a href="{{route('admin-home')}}" class="btn btn-primary btn-lg">Back</a>
     </div>



  <br />
  <div class="container box">
   <h3 align="center">Search The Library</h3><br />

<div class="add-books-button">

    <a href="{{route('add-books')}}" class="btn btn-success">Add Book</a>
</div>

   <div class="panel panel-default">
    <div class="panel-heading">Search Book Data</div>
    <div class="panel-body">
     <div class="form-group">
         {{--  --}}
         @if(session()->has('message'))
        <div class="alert alert-success">{{session()->get('message')}}</div>

        @elseif(session()->has('error'))
        <div class="align-center alert alert-danger">{{session()->get('message')}}</div>

        @endif
         {{--  --}}
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Books" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Book ID</th>
         <th>Book Name</th>
         <th>Book Type</th>
         <th>Book Link</th>
         <th>Edit</th>
         <th>Delete</th>


        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('manage-books.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
