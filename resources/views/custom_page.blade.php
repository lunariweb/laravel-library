<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>

    <link rel="stylesheet" href="{{asset('css/admin-settings-style.css')}}">
</head>
<body>

    @extends('sidebars.adminSidebar_settings')

    @section('sidebar')

    @endsection

    <div class="admin__settings">

        <div class="form-holder">
            <form action="{{route('adminProfileImgSubmit', $admin->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('patch') --}}

                <div class="image__section">
                <img src="/storage/images/{{Auth::user('admin')->image}}" width="120" alt="" class="profile__img" />
                <input type="file" name="image" class="image" required>
                </div>

                <div class="left__section">
                    <input type="text" name="name" value="{{Auth::user('admin')->name}}" class="name">
                    <input type="text" name="email" value="{{Auth::user('admin')->email}}" class="email" disabled>
                    <input type="text" name="job_title" value="{{Auth::user('admin')->job_title}}" class="job_title" disabled>
                    {{-- <input type="text" name="password" value="{{Auth::user('admin')->bcrypt()->password}}"> --}}
                    <input type="text" name="fullname" placeholder="Enter your full name" value="{{Auth::user('admin')->fullname}}" class="fullname">
                    <input type="text" name="address" placeholder="Enter your address" class="address" value="{{Auth::user('admin')->address}}">

                </div>

                <div class="right__section">
                    <input type="text" name="birthday" placeholder="Enter your Birthday" class="birthday" value="{{Auth::user('admin')->birthday}}">
                    <input type="text" name="age" placeholder="Your Age" class="age" value="{{Auth::user('admin')->age}}">
                    <input type="text" name="gender" placeholder="Male or Female" class="gender" value="{{Auth::user('admin')->gender}}">
                    <input type="number" name="mobile" placeholder="Your mobile number" class="mobile" value="{{Auth::user('admin')->mobile}}">

                </div>
                <div class="bottom__section">
                    <input type="submit" value="submit">

                </div>
            </form>

        </div>

    </div>

</body>
</html>


{{-- full name
    address
    birthday
    age
    male or female
    mobile
    --}}
