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
                            Hello! Choose your role
                        </h1>
                        <p class="text-muted">
                            Register a new wallet or <a href="#">restore an existing one from the backup</a>
                        </p>
                    </div>
                    <div class="w-100">
                        @include("forms._textareaAvatar", [
                            "name"=>"text",
                            "value"=>"",
                            "label"=>"Secret phrase",
                            "placeholder"=>"The secret phrase is 15 words that you wrote down when creating a wallet",
                            "attributes"=>[
                                "rows"=>3
                            ],
                            "avatar"=>"/img/tiger.jpg",
                            "userName"=>"Константин Константинович",
                            "userSubtext"=>"sdfsdfkug1i23v6r32df"
                        ])
                    </div>
                    <div class="form-group mt-2 mb-0 form-check text-left w-100">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-muted" for="exampleCheck1">Save account on this device</label>
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