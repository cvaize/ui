@extends('layouts.app', ["bodyClass"=>"bg-light"])

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Herbal Cocktail & Physical Exercises
                </h2>
                <p>
                    Here you can see the voting and cost stories
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="p-3">
                    <div class="row">
                        <div class="col-auto d-flex align-items-center justify-content-start">
                            <div class="thumbnail__wrapper">
                                <img class="rounded-circle img-thumbnail" src="/img/tiger.jpg" alt="">
                            </div>
                            <div class="pl-3">
                                <div class="h6 text-primary font-weight-normal text-nowrap lh--1_4">
                                    Kirill Silvestrov
                                </div>
                                <div class="text-muted small lh--1_4">
                                    Neurofeedback, EEG, Psychiatry
                                </div>
                                <div class="text-muted small lh--1_4">
                                    ET-Expert score: 2437
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="raiting">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center pb-5">
        <button class="btn btn-secondary my-5">LOAD MORE</button>
    </div>
@stop