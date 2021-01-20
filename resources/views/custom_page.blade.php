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

        <div class="profile__pic">
            <img src="/storage/images/{{Auth::user('admin')->image}}" width="120" alt="" class="profile__img" />
            <form action="{{route('adminProfileImgSubmit', $admin->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('patch') --}}
                <input type="text" name="name" value="{{Auth::user('admin')->name}}">
                <input type="text" name="email" value="{{Auth::user('admin')->email}}">
                <input type="text" name="job_title" value="{{Auth::user('admin')->job_title}}">
                <input type="text" name="password" value="{{Auth::user('admin')->password}}">
                <input type="file" name="image">

                <input type="submit" value="submit">
            </form>

        </div>

    </div>

</body>
</html>
