<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>KinoPlusPodcast</title>

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavigation"
                    aria-expanded="false">
                <span class="sr-only">Navigation umschalten</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KinoPlusPodcast</a>
        </div>

        <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Startseite</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
