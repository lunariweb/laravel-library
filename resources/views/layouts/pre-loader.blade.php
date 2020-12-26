@yield('pre-loader')
<link rel="stylesheet" href="{{asset('/css/pre-loader.css')}}">
<script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<script>
    $(window).on("load", function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
