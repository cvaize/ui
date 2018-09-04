@extends('layouts.app', ["navbar"=>false])

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7" style="min-height: 100vh;">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <div class="my-5">
                        <a href="#">
                            <img height="100" src="/img/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="my-3 text-center">
                        <h1>
                            Hello! Choose your role
                        </h1>
                        <p class="text-muted">
                            Eternal Trusts is a hybrind intelligence platform that <br>
                            manages and spends cryptoassets on your long-term objectives
                        </p>
                    </div>
                    <div class="my-5 text-center w-100">
                        <div class="row justify-content-center">
                            <div class="col-auto col-lg-4 d-flex justify-content-center">
                                @include("modules.checkboxIcon.checkboxIcon",
                                [
                                    "name"=>"role_id",
                                    "text"=>"Join as a <b>Client</b>",
                                    "btnText"=>"Choose role (Click here)",
                                    "btnTextChecked"=>"Active role",
                                    "icon"=>"fab fa-reddit-alien",
                                    "widthLimitation"=>true
                                ]
                                )
                            </div>
                            <div class="col-auto col-lg-4 d-flex justify-content-center checkboxIcon__border-lines
                            checkboxIcon__border-lines--md">
                                @include("modules.checkboxIcon.checkboxIcon",
                                [
                                    "name"=>"role_id",
                                    "text"=>"Join as a <b>Client</b>",
                                    "btnText"=>"Choose role (Click here)",
                                    "btnTextChecked"=>"Active role",
                                    "icon"=>"fas fa-robot",
                                    "checked"=>true,
                                    "widthLimitation"=>true
                                ]
                                )
                            </div>
                            <div class="col-auto col-lg-4 d-flex justify-content-center">
                                @include("modules.checkboxIcon.checkboxIcon",
                                [
                                    "name"=>"role_id",
                                    "text"=>"Join as a <b>Client</b>",
                                    "btnText"=>"Choose role (Click here)",
                                    "btnTextChecked"=>"Active role",
                                    "icon"=>"fab fa-earlybirds",
                                    "widthLimitation"=>true
                                ]
                                )
                            </div>
                        </div>
                        <button class="btn btn-primary mt-5 mb-4 btn-block btn-lg">CONTINUE</button>
                        <p class="text-muted mb-2">or</p>
                        <p class="mb-5">
                            <a href="#">Sing In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop