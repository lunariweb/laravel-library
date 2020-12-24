<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('/css/delete-books-style.css')}}">

    <title>Delete User</title>
</head>
<body>

    <div class="container">

    <h4>Delete</h4>
    <h2>User Name: {{$user->name}}</h2>

    <div class="button-container">
        <div class="cancel-button">
            <a href="{{route('admin-manage-users-view')}}" class="btn btn-primary">Cancel</a>

        </div>
    <a class="btn btn-danger" onclick="event.preventDefault();

                                            if(confirm('Are you sure you want to delete this User?')){
                                            document.getElementById('form-destroy-{{$user->id}}').submit()}">Delete</a>

        <form style="display:none" id="{{'form-destroy-'.$user->id}}" method="post" action="{{route('user.delete.submit' ,$user->id)}}">
            @csrf
            @method('delete')
        </form>

    </div>
    </div>

</body>
</html>
