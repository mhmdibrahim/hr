<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
    <style>
        .page-item.disabled .page-link{
            border-radius: 0;
            background: #a221ff;
            border: none;
            color:white;
            font-size: 18px;
        }
    </style>
</head>

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">HR</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="{{route('departments.show')}}">Home</a>
                <a class="nav-link" href="{{route('departments.show')}}">Show</a>
                {{--<a class="nav-link" href="https://www.facebook.com/mhmdtefa">Edit</a>--}}
            </nav>
        </div>
    </header>
    <main role="main" class="inner cover">
        @if(session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
        @endif
        <h1 class="cover-heading">@yield('header')</h1>
        <p class="lead">@yield('content')</p>
        <p class="lead">
        </p>
    </main>
    @yield('footer')
    <footer class="mastfoot mt-auto">
        <div class="inner">
            by <a href="https://www.facebook.com/mhmdtefa">@mhmd</a>.</p>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
