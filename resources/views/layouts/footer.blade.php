@yield('footer')
<footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
    <link rel="stylesheet" href="{{asset('/css/footer-style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="overlay"></div>
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-4 fh5co-widget">
                <h3>About Cloud Library.</h3>
                <p class="text-white">Our library is the best cloud library that exist right now. We have a collection of books more than 5000. And we also provide day-today news feature</p>

                @if (Route::has('login'))
                    @auth
                    <p><a class="btn btn-primary" href="{{url('/home')}}">Home</a></p>
                    @else
                    <p><a class="btn btn-primary" href="{{route('register')}}">Become A Member</a></p>
                    @endauth
                @endif


            </div>
            <div class="col-md-8 d-flex">

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <h3 >Links</h3>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Cookies</a></li>


                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <h3 >Find Us On</h3>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Reddit</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <ul class="fh5co-footer-links">
                        <h3 >More</h3>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p class="text-white">
                    <small class="block">&copy; 2020 | All Rights Reserved.</small>
                    <small class="block">Powered by Lunari</small>
                </p>
            </div>
        </div>

    </div>
</footer>
