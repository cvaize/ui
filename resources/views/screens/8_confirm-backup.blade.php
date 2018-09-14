@extends('layouts.app', ["navbar"=>false])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7" style="min-height: 100vh;">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <div class="my-4">
                        <a href="#">
                            <img height="100" src="/img/et-black.png" alt="">
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
                    <?php
                    $names = "selectorWord[]";
                    $words = [
                        [
                            "text"=>"drink",
                            "value"=>"drink"
                        ],
                        [
                            "text"=>"Please",
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
                    {{ Form::open(["url"=>"/","class"=>""]) }}
                    <div class="w-100 pb-4">
                        @include("modules.selectorWord.selectorWord", [
                            "names"=>$names,
                            "words"=>[
                                [
                                    "text"=>"phrase",
                                    "value"=>"phrase"
                                ],
                            ]
                        ])
                    </div>

                    <div class="w-100">
                        <p class="text-center">
                            Please click on the words in the correct order
                        </p>
                        <div class="d-flex justify-content-center flex-wrap px-5 js-data-select-copy">
                            @foreach($words as $word)
                                @include("modules.selectorWord._tag", [
                                    "name"=>$names??null,
                                    "text"=>$word["text"]??null,
                                    "value"=>$word["value"]??null,
                                    "close"=> true,
                                    "class"=>"selectorWord__item",
                                    "selectCopy"=>".js-selectorWord"
                                ])
                            @endforeach
                        </div>
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