
  @extends('layouts.admin-dashboard-page-header')

  @section('header')



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


 @endsection

</html>
