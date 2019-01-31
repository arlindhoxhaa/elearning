<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cloud e-Learning</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
   @include('inc.navbar')
    @yield('content')
    
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    
</body>
</html>
