@extends('layouts.request-books-page-header')

@section('header')


    <div class="contact-title">

      <h1>Can't Find The Book?</h1>
      <h2>Send Us A Request, So We Can Add The Book</h2>

    </div>

    <div class="contact-form"> <!--creating a form to request books -->

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
      <form id="contact-form" method="post" action="{{route('send-email')}}">
        @csrf
        <input name="name" type="text" class="form-control" placeholder="Your Name" required> <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

          <textarea name="message" class="form-control" placeholder="Your Request" rows="8" required></textarea><br>

          <input type="submit" class="form-control-submit" value="SEND REQUEST">


      </form>

    </div>





  @endsection

  @extends('layouts.pre-loader')
    @section('pre-loader')

    @endsection






</html>
