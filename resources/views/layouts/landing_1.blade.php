<!DOCTYPE html>
<!-- Template by html.am -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/public.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
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
    </script>
</body>
</html>