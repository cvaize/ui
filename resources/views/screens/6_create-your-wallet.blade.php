@extends('layouts.app', ["navbar"=>false])

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7" style="min-height: 100vh;">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <div class="my-4">
                        <a href="#">
                            <img height="100" src="/img/logo.jpg" alt="">
                        </a>
                    </div>
                    <div class="my-3 text-center">
                        <h1>
                            Hello! Choose your role
                        </h1>
                        <p class="text-muted">
                            Register a new wallet or <a href="#">restore an existing one from the backup</a>
                        </p>
                    </div>
                    <div class="col-12">
                        <hr class="w-100">

                    </div>
                    <div class="my-4 text-center w-100">
                        <div class="row justify-content-center text-left">
                            <div class="col-12">
                                <p class="mb-0" style="line-height: 1.4">
                                    <span class="h5 font-weight-normal">
                                    Select an avatar with your address
                                    </span>
                                    <br>
                                    <span class="text-muted">
                                    This avatar is unique, you can not change it later
                                    </span>
                                </p>
                            </div>

                        </div>
                        <div class="row justify-content-md-between no-gutters py-4">

                            <div class="col-auto px-2">
                                @include("modules.selectAvatar.selectAvatar", [
                                "name"=>"avatar",
                                "value"=>1,
                                "img"=>"/img/tiger.jpg"
                                ])
                            </div>
                            <div class="col-auto px-2">
                                @include("modules.selectAvatar.selectAvatar", [
                                "name"=>"avatar",
                                "value"=>2,
                                "img"=>"/img/tiger.jpg"
                                ])
                            </div>
                            <div class="col-auto px-2">
                                @include("modules.selectAvatar.selectAvatar", [
                                "name"=>"avatar",
                                "value"=>3,
                                "img"=>"/img/tiger.jpg"
                                ])
                            </div>
                            <div class="col-auto px-2">
                                @include("modules.selectAvatar.selectAvatar", [
                                "name"=>"avatar",
                                "value"=>4,
                                "img"=>"/img/tiger.jpg"
                                ])
                            </div>
                            <div class="col-auto px-2">
                                @include("modules.selectAvatar.selectAvatar", [
                                "name"=>"avatar",
                                "value"=>5,
                                "img"=>"/img/tiger.jpg"
                                ])
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-12">
                                @include("forms._input", [
                    "type"=>"text",
                    "name"=>"address",
                    "value"=>"",
                    "label"=>"Wallet address:",
                    "placeholder"=>"Wallet address:",
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                            </div>
                            <div class="col-12">

                                <div class="form-group form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck12" checked>
                                    <label class="form-check-label text-muted" for="exampleCheck12">Save account on this device</label>
                                </div>
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