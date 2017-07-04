<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title' | config('app.name', 'Laravel'))</title>

    <link href=" {{ asset('cms/css/cms.min.css') }}" rel="stylesheet">

    <script>
        window.Laravel={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="main">
@yield('content')
</div>
</body>