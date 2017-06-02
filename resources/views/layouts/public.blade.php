<!DOCTYPE html>
<!-- Template by html.am -->
<html>
    <head>
        @include('layouts._head')
        <title>@yield('title') |</title>
    </head>
    <body>

        <main>
            @yield('content')
        </main>

        <footer>
            {{-- Scripts--}}
            <script type="text/javascript" src="{{asset('js/public.bundle.js')}}"></script>
        </footer>
    </body>
</html>