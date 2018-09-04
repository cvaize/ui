
@extends('layouts.app', ["navbar"=>false])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6" style="min-height: 100vh;">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <div class="my-5">
                    <a href="#">
                        <img height="100" src="/img/logo.jpg" alt="">
                    </a>
                </div>
                <div class="my-5 text-center">
                    <h1>
                        Sing in to the wallet
                    </h1>
                    <p>Sing in again or <a href="#">create a new wallet</a></p>
                </div>
                <div class="row no-gutters w-100">
                    <div class="col">
                        <label>
                            Address/Account name
                        </label>
                    </div>
                    <div class="col text-right">
                        <p><a href="#">Restore the wallet from the backup</a></p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="mb-3">
                        @include("modules.account-select.account-select", [
                            "name"=>"account_id",
                            "default"=>"/img/default.jpg",
                            "add"=>true,
                            "required"=>true,
                            "addUrl"=>"/",
                            "addTarget"=>"_blank",
                            "addText"=>"Add account",
                            "placeholder"=>"Select account",
                            "value"=>2,
                            "list"=>[
                                1=>[
                                    "name"=>"Константин Константинович Константинопольский",
                                    "subtext"=>"mn0tx93",
                                    "avatar"=>"/img/tiger.jpg",
                                    "delete"=>[
                                        "active"=>true,
                                        "ajax"=>true,
                                        "url"=>"/",
                                        "method"=>"get",
                                        "data"=>[
                                            "account_id"=>1
                                        ],
                                    ]

                                ],
                                2=>[
                                    "name"=>"Константин Константинович",
                                    "subtext"=>"mn0tx93",
                                    "avatar"=>"/img/tiger.jpg",
                                    "delete"=>[
                                        "active"=>true,
                                        "ajax"=>true,
                                        "url"=>"/",
                                        "method"=>"get",
                                        "data"=>[
                                            "account_id"=>2
                                        ],
                                    ]

                                ],
                            ]
                        ])
                    </div>
                    <div class="mb-3">
                        @include("forms._input", [
                                            "type"=>"password",
                                            "name"=>"password",
                                            "value"=>"gsfuo7232370462462083hef723",
                                        ])
                    </div>
                    <div class="mb-5">
                        <button class="btn btn-success mb-3 btn-block btn-lg">ENTER</button>
                    </div>
                    @include("modules.hr--rounded-circle.hr--rounded-circle", ["textHr"=>"or", "classHr"=>"my-5"])
                    <div class="my-5 d-flex align-items-center justify-content-center h3">
                        <a class="d-block mx-3" href="#">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                        <a class="d-block mx-3" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="d-block mx-3" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="d-block mx-3" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop