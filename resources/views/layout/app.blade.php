<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <title>Frequency Generator - 101. JgBtl</title>

    <meta property=og:title content="Frequency Generator - 101.JgBtl">
    <meta property=og:type content=object>
    <meta property=og:url content=https://radio.101-jgbtl.de/>
    <meta property=og:image content=https://radio.101-jgbtl.de/img/logo.png>
    <meta property=og:image:type content=image/png>
    <meta property=og:image:width content=512>
    <meta property=og:image:height content=512>
    <meta property=og:site_name content="101. Jägerbattalion">
    <meta property=og:description content="Small tool to generate Frequency tables for TvT events. Easy to generate, easy to share">

    <meta name=twitter:card content=summary>
    <meta name=twitter:site content=@101jgbtl>

    <meta name=description content="Small tool to generate Frequency tables for TvT events. Easy to generate, easy to share">
    <meta name=keywords content="arma 3, tvt, frequency, generator, milsim, tfar, acre, acre2">
    <meta name=robots content="index, follow">
    <meta itemprop=name content="Frequency Generator - 101.JgBtl">
    <meta itemprop=description content="Small tool to generate Frequency tables for TvT events. Easy to generate, easy to share">
</head>
<body>
<main role="main">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-11">
            <div class="text-center">
                <img src="{{ asset('img/logo.png') }}" alt="" width="15%">

                <h3>Generate Frequencies</h3>
                <small>by 101. Jägerbattalion</small>
                <p>
                    Have you ever played a TvT-Event and the enemy knew your frequency because he captured one of your radios? Yes, this happened to me too. So i wrote this small tool for my clan, which generates a radio table, that can be easily shared via the link.
                </p>

            </div>
            <div class="row mt-5">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



</main>


<footer class="footer">
    <div class="row">
        <div class="col-3">
            <a href="https://github.com/101JgBtl/Radio-Generator/issues" class="mr-2">Issues, Questions?</a>
            <a href="{{ route('imprint') }}">Imprint & Privacy</a>
        </div>
        <div class="col-6">
            <div class="col text-center">
                <a href="https://101-jgbtl.de">101. Jägerbattalion</a><br>
            </div>
        </div>
        <div class="col-3 text-right">
            {{ \App\Models\Frequency::all()->count() }} Tables generated
        </div>
    </div>
</footer>
</body>
</html>
