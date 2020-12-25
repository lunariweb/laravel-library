@extends('layouts.user-dashboard-header')

@section('header')
  <!--end of the header file ---------------------------------------------------------------------------------------------------------------------->



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
            <h3>Details</h3>

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
            <h3>Change</h3>

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
            <h3>Customize</h3>

          </div>

        </div>

      </div>

    </div>

    @endsection






</html>
