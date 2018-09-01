<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{mix("/css/app.css")}}">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="position-relative text-center">
                <a href="#" class="link--with-icon-hover login__link-back">
                    <i class="fas fa-angle-left mr-2"></i><span class="link__hover-element">Back</span>
                </a>
                <a class="link-unstyled" href="/">
                    <img src="/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="text-center">
                <h1>Protect your account</h1>
                <p class="text-gray">Create a password to project your account</p>
            </div>
            <hr>
            @include("forms._input", [
                    "type"=>"text",
                    "name"=>"name",
                    "value"=>"",
                    "placeholder"=>"Account name",
                    "label"=>"Enter at least 6 symbols",
                    "text"=>"You can use a-z, A-Z, 0-9 and special symbols"
                ])
            @include("forms._input", [
                "type"=>"password",
                "name"=>"password",
                "value"=>"gsfuo7232370462462083hef723",
                "label"=>"Password",
                "eye"=>true
            ])
            @include("forms._input", [
                "type"=>"password",
                "name"=>"conf_password",
                "value"=>"gsfuo7232370462462083hef723",
                "label"=>"Password"
            ])
            @include("forms._checkbox", [
                "name"=>"save",
               "label"=>"Save account on this device",
               "formClass"=> "mb-5"
            ])
            <button class="btn btn-primary mb-5 btn-block btn-lg">CONTINUE</button>
        </div>
    </div>
</div>

<script src="{{mix("/js/app.js")}}"></script>
</body>
</html>
