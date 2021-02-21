<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

  <script>
    function initFreshChat() {
      window.fcWidget.init({
        token: "e225117c-4e63-4e04-a322-b88c383e142b",
        host: "https://wchat.freshchat.com"
      });
    }
    function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
  </script>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>

    @extends('layouts.pre-loader')
    @section('pre-loader')


    @endsection



</body>
</html>
