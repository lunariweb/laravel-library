@extends('layouts.contact-us-page-header')

@section('header')


    <div class="contact-title"> <!--creating basic form holder and creating the form -->

      <h1>Having Issues?</h1>
      <h2>Send Us A Message, We will get back to you</h2>

    </div>

    <div class="contact-form">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <button class="close" type="button" data-dismiss="alert">x</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>

            </div>

        @endif

      <form id="contact-form" method="post" action="{{route('send-contact-mail')}}">
          @csrf
        <input name="name" type="text" class="form-control" placeholder="Your Name" required> <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
        <input type="text" name="mobile" class="form-control" placeholder="Your Mobile Number" required><br>

          <textarea name="message" class="form-control" placeholder="Your Message" rows="8" required></textarea><br>

          <input type="submit" class="form-control-submit" value="SEND REQUEST" onclick=" return checkemail()">


      </form>

    </div>



    <script type="text/javascript">

    function checkemail() {

      return confirm('Email Sent Succesfully');
    }

    </script>
  @endsection






</html>
