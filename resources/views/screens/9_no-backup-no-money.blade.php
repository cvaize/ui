@extends('layouts.app', ["navbar"=>false, "footer"=>false])

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
                            No backup - no money
                        </h1>
                        <p class="text-muted">
                            You must save the secret phrase. This is necessary to access your wallet
                        </p>
                    </div>
                    <div class="my-3">
                        <img style="height: 100px" src="/img/bootstrap-theme-et/money.svg" alt="Money">
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