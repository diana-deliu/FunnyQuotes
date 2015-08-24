<!DOCTYPE html>
<html>
<head>
    <title>Stupid Quotes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,100,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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
    <div class="rectangle content">
        <div class="green" id="myDivGreen">
            <span class="rect-text"> curu</span>
        </div>
        <div class="orange" id="myDivOrange">
            <span class="rect-text"> văcaru</span>

        </div>
        <div class="purple" id="myDivPurple">
            <span class="rect-text"> amorsa</span>

        </div>
        <div class="pink" id="myDivPink">
            <span class="rect-text"> de baie</span>

        </div>
    </div>

    <div class="rectangle content">
        <div class="orchid" id="myDivOrchid">
            <span class="rect-text"> curca</span>

        </div>
        <div class="marigold" id="myDivMarigold">
            <span class="rect-text"> merge</span>

        </div>
        <div class="violet" id="myDivViolet">
            <span class="rect-text"> la</span>

        </div>
        <div class="kelly" id="myDivKelly">
            <span class="rect-text"> piaţă</span>

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
