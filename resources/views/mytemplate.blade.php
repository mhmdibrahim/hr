<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("css/app.css")}}" rel="stylesheet"/>
    <title>HR..</title>
</head>
<body>
    <div class="container">
        <div class="header" >
            @yield("header")
        </div>
        <div class="container">
            @yield("content")
        </div>
        <div class="footer">

            @yield("footer")
        </div>
    </div>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>