<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cloud Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('/css/welcome-page-style.css')}}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

        {{-- <script src="{{asset('/json/particlesjs-config.json')}}"></script> --}}




        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }


        </style>
    </head>


    <body>

        <div class="bg-dark p-2 d-flex flex-row">
            <div class="relative w-15">
                <img src="{{asset('/storage/images/document.png')}}" width="50">
            </div>

            <div class="w-50 mt-1 text-left ml-xl-3"><h2 class="text-white text-uppercase font-weight-bold">Cloud Library</h2></div>

            <div class="relative d-flex mt-1 flex-row-reverse w-100">


                @if (Route::has('login'))
                    <div class="relative">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>




        <section id="particles-js" class="particles">
            <div class="main-content">

                <script type="text/javascript" src="{{asset('/js/particles.js')}}"></script>
            <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
                <div class="main-text">
                    <h1>Cloud Library</h1>
                </div>

                <div class="main-des">
                    <p>The best and most popular cloud library platform that was ever created.
                        We provide one click book-downloads <br> and no annoying advertiesments. Also our cloud library platform comes with a latest news case feature <br> where we will provide you the latest day-today news from the most truste sources all over the world.
                        <br>
                        <br><span class="fa fa-check"></span> Thousands of books
                        <br><span class="fa fa-check"></span> Day-today news feature
                        <br><span class="fa fa-check"></span> On click downloads
                        <br><span class="fa fa-check"></span> No advertiesments

                    </p>
                        <a href="#books" class="btn btn-primary btn-lg">More Details</a>
                </div>

            </div>



        </section>

        <section id="books" class="mb-5">
            <div class="lib-content">

                <div class="bg-dark">
                    <h1 class="text-white text-uppercase font-weight-bold ml-2">Latest Books</h1>
                </div>

                <div class="ml-5 d-flex position-relative ">
                    <h3>Recently added books</h3><br>
                    <p class="text-black ml-5 mt-3">
                        <br><span class="fa fa-plus"></span> Harry Potter 1
                        <br><span class="fa fa-plus"></span> Lord Of the Rings
                        <br><span class="fa fa-plus"></span> Narnia
                        <br><span class="fa fa-plus"></span> Sherlock Holmes
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                    </p>

                    <p class="text-black ml-5 mt-3">
                        <br><span class="fa fa-plus"></span> Harry Potter 1
                        <br><span class="fa fa-plus"></span> Lord Of the Rings
                        <br><span class="fa fa-plus"></span> Narnia
                        <br><span class="fa fa-plus"></span> Sherlock Holmes
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                    </p>

                    <p class="text-black ml-5 mt-3">
                        <br><span class="fa fa-plus"></span> Harry Potter 1
                        <br><span class="fa fa-plus"></span> Lord Of the Rings
                        <br><span class="fa fa-plus"></span> Narnia
                        <br><span class="fa fa-plus"></span> Sherlock Holmes
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                    </p>

                    <p class="text-black ml-5 mt-3">
                        <br><span class="fa fa-plus"></span> Harry Potter 1
                        <br><span class="fa fa-plus"></span> Lord Of the Rings
                        <br><span class="fa fa-plus"></span> Narnia
                        <br><span class="fa fa-plus"></span> Sherlock Holmes
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                        <br><span class="fa fa-plus"></span> Famous Five
                    </p>




                </div>

                <div class="ml-5">
                    <h4>Haven't registered yet?, <a href="/register" class="text-decoration-non text-primary">Register</a> now and access full features of the best cloud library for free.</h4>
                </div>

            </div>
        </section>

        <section>
            <div class="bg-dark">
                <h1 class="text-white text-uppercase font-weight-bold ml-2">Latest News</h1>

            </div>
            <div class="d-flex w-80 ml-xl-0 mr-2 px-4">

                <div class="w-35 mt-3 mb-3 p-5 bg-light ml-5 border border-dark rounded shadow">
                    <h3 class="font-weight-bold">Coronavirus: France finds first case of new variant</h3>
                    <img src="{{asset('/storage/images/_116262541_mediaitem116262539.jpg')}}" alt="" width="400">                    <!--news image--->
                    <p class="mt-2">France has confirmed the first case in the country of the more contagious coronavirus variant recently identified in the UK</p>
                    <a href="/browsenews/22/news" class="btn btn-primary">Read More</a>
                </div>

                <div class="w-35 mt-3 mb-3 p-5 bg-light ml-5 border border-dark rounded shadow">
                    <h3 class="font-weight-bold">George Blake: Soviet Cold War spy and former MI6 officer dies in Russia</h3>
                    <img src="{{asset('/storage/images/_116264569_pa-33915718.jpg')}}" alt="" width="400">                    <!--news image--->
                    <p class="mt-2">George Blake, the former MI6 officer and one of the Cold War's most infamous double agents, has died aged 98, Russian media has reported.</p>
                    <a href="/browsenews/21/news" class="btn btn-primary">Read More</a>
                </div>

                <div class="w-35 mt-3 mb-3 p-5 bg-light ml-5 border border-dark rounded shadow">
                    <h3 class="font-weight-bold">737 Max: Air Canada flight in unscheduled landing after engine issue</h3>
                    <img src="{{asset('/storage/images/_116163439_hi064851050-1.jpg')}}" alt="" width="400">                    <!--news image--->
                    <p class="mt-2">An Air Canada Boeing 737 Max aircraft has been forced to make an unscheduled landing after developing engine trouble, the airline has said. </p>
                    <a href="/browsenews/20/news" class="btn btn-primary">Read More</a>
                </div>

            </div>

            <div id="news-btn-1" class="ml-5 mb-4 d-flex justify-content-center">
                <h2 class="">View more news from around the world.</h2>

            </div>

            <div class="d-flex justify-content-center">
                <a href="{{asset('browsenews')}}" class="btn btn-success mb-5 ml-4 px-3">View More</a>
            </div>
        </section>














    </body>

    @extends('layouts.footer')

    @section('footer')


    @endsection

    @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection

</html>
