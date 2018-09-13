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
                            Saving a secret phrase
                        </h1>
                        <p class="text-muted">
                            As soon as you control your money, you need to keep a secrter phrase
                        </p>
                    </div>
                    <div class="w-100 text-center">
                        <p>
                            Please careful write down 15 words or <span class="selectorWord__copy-words js-selectorWord__copy-words" >copy them</span>
                        </p>
                    </div>
                    <?php
                    $names = "selectorWord[]";
                    $words = [
                        [
                            "text"=>"drink",
                            "value"=>"drink"
                        ],
                        [
                            "text"=>"please",
                            "value"=>"please"
                        ],
                        [
                            "text"=>"drink",
                            "value"=>"drink"
                        ],
                        [
                            "text"=>"words",
                            "value"=>"words"
                        ],
                        [
                            "text"=>"careful",
                            "value"=>"careful"
                        ],
                        [
                            "text"=>"keep",
                            "value"=>"keep"
                        ],
                        [
                            "text"=>"control",
                            "value"=>"control"
                        ],
                        [
                            "text"=>"keep",
                            "value"=>"keep"
                        ],
                        [
                            "text"=>"phrase",
                            "value"=>"phrase"
                        ],
                    ];
                    ?>
                    <div class="w-100 pb-4">
                        @include("modules.selectorWord.selectorWord", [
                            "names"=>$names,
                            "disable"=>true,
                            "words"=>$words
                        ])
                    </div>

                    <div class="w-100">
                        <p class="text-center">
                            Please click on the words in the correct order
                        </p>
                    </div>

                    <div class="mb-4 mt-2 text-center w-100">

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