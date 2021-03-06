<!doctype html>
<html lang="{{ app()->getLocale() }}" class="bootstrap-theme-et">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css">
    {{--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.4/tippy.css">
    <link rel="stylesheet" href="{{mix("/css/all.css")}}">
    <link rel="stylesheet" href="{{mix("/css/bootstrap-theme-et.css")}}">
</head>
<body class="{{$bodyClass ?? null}}">
<?php
$navbar = $navbar ?? true;
?>
@if($navbar)
    @include("layouts.navbar")
@endif

@yield('content')

<?php
$footer = $footer ?? true;
?>
@if($footer)
@include("layouts.footer")
@endif

<script src="{{mix("/js/start.js")}}"></script>
<script src="{{mix("/js/libs.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.4/tippy.all.min.js"></script>
<script src="{{mix("/js/bootstrap-theme-et.js")}}"></script>
</body>
</html>
