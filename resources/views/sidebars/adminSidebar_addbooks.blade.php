<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css')}}">
    <title>Add books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body>

    <div class="sidebar">

        <div class="sideber__header">
            {{-- title --}}

            <div class="sidebar__title">
                <img src="{{ asset('storage/images/document.png') }}" width="50" alt="">
                <h1>Cloud Library</h1>


            </div>

            {{-- username and avatar --}}
            <div class="sidebar__user">
                <img src="/storage/images/{{Auth::user('admin')->image}}" alt="Avatar" class="avatar">
                <h2>{{Auth::user('admin')->name}}</h2>

                {{-- logout button --}}
                <a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                    </form>
            </div>




        </div>

        <div class="sidebar__body">

            <div class="sidebar__contents">
                {{-- pages --}}

                <div class="sidebar__content" onClick="window.location='/admin'">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h2>Home</h2>
                </div>

                <div class="sidebar__content" onClick="window.location='/admin/managebooks'">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <h2>Books</h2>
                </div>

                <div class="sidebar__content active" onClick="window.location='/admin/addbooks'">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h2>Add Books</h2>
                </div>

                <div class="sidebar__content" onClick="window.location='/admin/addnews'">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <h2>Add News</h2>
                </div>

                <div class="sidebar__content" onClick="window.location='/admin/settings'">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <h2>Settings</h2>
                </div>


            </div>

            <div class="sidebar__footer">

                {{-- important links --}}
                <div class="footer__content" onCLick="window.location='https://www.termsfeed.com/live/0fb2ab2e-5f27-47fc-9c01-9a52d389e1eb'">
                    <h2>Privacy Policy</h2>
                </div>

                <div class="footer__content" onClick="window.location='https://www.termsfeed.com/live/043cbffa-ff89-43f4-9d02-a4bfae3fcc55'">
                    <h2>Terms & Conditions</h2>
                </div>

                <div class="footer__content" onclick="window.location='https://www.privacypolicies.com/live/49001a72-b3f6-4a37-bdad-69de5afc1db9'">
                    <h2>Cookies</h2>
                </div>

            </div>


        </div>

        {{-- copyright --}}
        <p>© Cloud Library 2021. All Rights Reserved.</p>

    </div>

    <div class="main">
        @yield('sidebar')
    </div>


    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>

    {{-- <script type="text/javascript">
        $(document).on('click', '.sidebar__content', function(e){
            e.preventDefault();
            $(this).addClass('active').siblings().removeClass('active')
        });
    </script> --}}






</body>


</html>
