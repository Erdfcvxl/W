<!DOCTYPE html>
<html>
<head>
    @include('layouts._head')
    <link rel="stylesheet" href="{{asset('css/public.landing.min.css')}}">
    <title>@yield('title') |</title>
</head>
<body>
    <div class="background">
        <div class="video-background">
            <video playsinline muted poster="landing_1.jpg" loop="loop" id="background-video">
                <source src="{{asset('images/landing_1.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="preloader">
        <div class="preloader--spinner"></div>
    </div>


    <main>
        @yield('content')
    </main>

    <script>
        function onVideoLoad() {
            var preloaderSpinner = document.getElementsByClassName('preloader--spinner');
            preloaderSpinner[0].classList.add('inActive');

            setTimeout(function() {
                video.play();
                var preloader = document.getElementsByClassName('preloader');
                preloader[0].classList.add('inActive');
            }, 2000);
        };


        var video = document.getElementById('background-video');
        video.addEventListener('loadeddata', function() {
            onVideoLoad();
        }, false);

        setTimeout(function() {
            onVideoLoad();
        }, 500);
    </script>
</body>
</html>