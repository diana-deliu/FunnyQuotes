<!DOCTYPE html>
<html>
<head>
    <title>Stupid Quotes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/cube.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,100,300&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
</head>
<body>

<header>
    <div class="menu">
    </div>
    <div class="title">
        Stupid Quotes
    </div>

</header>

<div class="container-center">
    <div class="animated bounceInLeft rectangle content">
            <div class="cube-wrap vertical">
                <div class="cube depth">
                    <div class="front-pane">Curu</div>
                    <div class="top-pane">merge</div>
                    <div class="back-pane">în</div>
                    <div class="bottom-pane">pădure</div>
                </div>
        </div>
    </div>
    <div class="container-result">
        <div class="panel-quote panel panel-default col-lg-4 col-lg-offset-4">
            <div class="panel-body">
                Pelicanul marinat şi-a extirpat pula din ficat.
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
@include('partials.text_animation')
</body>
</html>
