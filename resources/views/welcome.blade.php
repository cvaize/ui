@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="d-none1 ">
                            <?php

                                $accountSelectPopupDeleteAccount = [
                                    "imageUrl"=>"/img/bootstrap-theme-et/warning.svg",
                                    "title"=>"Delete account",
                                    "customClass"=>"account-select-popup-delete",
                                    "confirmButtonClass"=>"btn btn-primary w-100 btn-lg ml-3",
                                    "cancelButtonClass"=>"btn btn-secondary btn-secondary--gray w-100 btn-lg mr-3",
                                    "buttonsStyling"=>false,
                                    "padding"=>"2.5rem",
                                    "showCancelButton"=>true,
                                    "confirmButtonText"=>"DELETE",
                                    "cancelButtonText"=>"CANCEL",
                                    "reverseButtons"=>true,
                                ];

                            ?>
                            <div class="js-account-select-popup-delete" data-setup-popup="{{json_encode($accountSelectPopupDeleteAccount)}}">
                                <div class="font-weight-light my-4">
                                    <p class="text-center mb-3 account-select-popup-delete__text">
                                        <i class="fas fa-info-circle mr-2" style="color: #B9CAEC;"></i>You did not save your LED
                                    </p>
                                    <p class="text-left account-select-popup-delete__text">Deleting an account will result in its loss if you did not save the secret phrase (SEED).
                                        Click the DELETE button to delete the account, or CANCEL to return to the previous screen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1>Header 1</h1>
                <h2>Header 2</h2>
                <h3>Header 3</h3>
                <h4>Header 4</h4>
                <h5>Header 5</h5>
                <h6>Header 6</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid animi aperiam aspernatur consequuntur debitis dolore, dolorem doloribus eos eum fuga fugiat id impedit ipsa modi natus nesciunt nobis pariatur perferendis placeat porro quasi quo, ratione reiciendis rem repellendus sequi sunt tenetur ullam veritatis voluptas voluptate voluptatum. Eius error eum, excepturi explicabo itaque, libero nemo nesciunt placeat quae quas rem vel vitae! Architecto beatae consectetur cum, dignissimos et id incidunt ipsa magni perferendis, quia quisquam ratione tempore temporibus vero voluptates. Aliquid consequatur delectus dolore dolores ea eius eligendi fugiat ipsa nihil nulla obcaecati pariatur quae quas quia tenetur, veniam.</p>
                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid animi aperiam aspernatur consequuntur debitis dolore, dolorem doloribus eos eum fuga fugiat id impedit ipsa modi natus nesciunt nobis pariatur perferendis placeat porro quasi quo, ratione reiciendis rem repellendus sequi sunt tenetur ullam veritatis voluptas voluptate voluptatum. Eius error eum, excepturi explicabo itaque, libero nemo nesciunt placeat quae quas rem vel vitae! Architecto beatae consectetur cum, dignissimos et id incidunt ipsa magni perferendis, quia quisquam ratione tempore temporibus vero voluptates. Aliquid consequatur delectus dolore dolores ea eius eligendi fugiat ipsa nihil nulla obcaecati pariatur quae quas quia tenetur, veniam.</p>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid animi aperiam aspernatur consequuntur debitis dolore, dolorem doloribus eos eum fuga fugiat id impedit ipsa modi natus nesciunt nobis pariatur perferendis placeat porro quasi quo, ratione reiciendis rem repellendus sequi sunt tenetur ullam veritatis voluptas voluptate voluptatum. Eius error eum, excepturi explicabo itaque, libero nemo nesciunt placeat quae quas rem vel vitae! Architecto beatae consectetur cum, dignissimos et id incidunt ipsa magni perferendis, quia quisquam ratione tempore temporibus vero voluptates. Aliquid consequatur delectus dolore dolores ea eius eligendi fugiat ipsa nihil nulla obcaecati pariatur quae quas quia tenetur, veniam.</p>
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <a href="#">Sign in</a>
                        <br>
                        <a href="#" class="link--with-icon-hover"><i class="fas fa-angle-left mr-2"></i><span class="link__hover-element">Back</span></a>
                        <br>
                        <div class="tag tag--success">
                            drink
                        </div>
                        <div class="tag tag--success">
                            drink
                            <i class="ml-1 fal fa-times"></i>
                        </div>
                        <br>
                        <br>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-muted" for="exampleCheck1">Check me out</label>
                        </div>
                        <br>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck12" checked>
                            <label class="form-check-label text-muted" for="exampleCheck12">Check me out</label>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-6">--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 bg-light ">--}}
                {{--<div class="dropdown">--}}
                    {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
                        {{--<a class="dropdown-item" href="#"><i class="fas fa-wallet mr-2"></i>My Wallet</a>--}}
                        {{--<a class="dropdown-item" href="#"><i class="fas fa-chart-line mr-2"></i>Active Trust</a>--}}
                        {{--<a class="dropdown-item" href="#"><i class="fas fa-history mr-2"></i>History of Trust</a>--}}
                        {{--<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Sing Out</a>--}}
                    {{--</div>--}}
                    {{--<button class="dropdown-toggle"--}}
                            {{--data-offset="-20px"--}}
                            {{--type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="caret"></span>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">

                <button class="btn btn-secondary mb-3">ENTER</button>
                <button class="btn btn-outline-secondary mb-3">CONTINUE</button>
                <button class="btn btn-secondary mb-3 small">CONTINUE</button>

                <button class="btn btn-primary mb-3">ENTER</button>
                <button class="btn btn-primary mb-3">CONTINUE</button>
                <button class="btn btn-primary mb-3 small">CONTINUE</button>
                <button class="btn btn-outline-primary font-weight-bold mb-3">CHOOSE TEMPLATE</button>
                <button class="btn btn-outline-primary font-weight-bold mb-3 small">CHOOSE TEMPLATE</button>
                <button class="btn btn-primary mb-3">LOAD MORE</button>
                <button class="btn btn-primary btn--with-i btn--rounded mb-3">
                    <i class="fas fa-question-circle fa-1_4x"></i>
                    <span class="inner">
                    GET HELP
                    </span>
                </button>
                <button class="btn btn-primary btn--with-i btn--rounded mb-3 small">
                    <i class="fas fa-question-circle fa-1_4x"></i>
                    <span class="inner">
                    GET HELP
                    </span>
                </button>
                <br>
                <br>
                <br>
                <br>

                <button class="btn btn-primary mb-3 btn-block">ENTER</button>
                <button class="btn btn-primary mb-3 btn-block">CONTINUE</button>
                <button class="btn btn-primary mb-3 btn-block small">CONTINUE</button>
                <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block">CHOOSE TEMPLATE</button>
                <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block small">CHOOSE TEMPLATE</button>
                <button class="btn btn-primary mb-3 btn-block">LOAD MORE</button>
                <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block">
                    <i class="fas fa-question-circle fa-1_4x"></i>
                    <span class="inner">
                    GET HELP
                    </span>
                </button>
                <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block small">
                    <i class="fas fa-question-circle fa-1_4x"></i>
                    <span class="inner">
                    GET HELP
                    </span>
                </button>
                <br>
                <br>
                <br>
                <br>

                <button class="btn btn-primary mb-3 btn-block btn-lg">ENTER</button>
                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-primary mb-3 btn-block btn-lg">CONTINUE</button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-primary mb-3 btn-block btn-lg small">CONTINUE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block btn-lg">CHOOSE TEMPLATE</button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block btn-lg small">CHOOSE TEMPLATE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-secondary font-weight-bold mb-3 btn-block btn-lg">CHOOSE TEMPLATE</button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-outline-secondary font-weight-bold mb-3 btn-block btn-lg small">CHOOSE TEMPLATE</button>
                    </div>
                </div>



                <button class="btn btn-primary mb-3 btn-block btn-lg">LOAD MORE</button>

                <div class="row">
                    <div class="col-lg-6">
                        <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block btn-lg">
                            <i class="fas fa-question-circle fa-1_4x"></i>
                            <span class="inner">
                            GET HELP
                            </span>
                        </button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block btn-lg small">
                            <i class="fas fa-question-circle fa-1_4x"></i>
                            <span class="inner">
                            GET HELP
                            </span>
                        </button>
                    </div>
                </div>




            </div>
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <button class="btn btn-outline-success btn-circle mb-3">
                    <i class="fal fa-plus"></i>
                </button>

                <button class="btn btn-success btn-circle mb-3">
                    <i class="fal fa-plus"></i>
                </button>

                <button class="btn btn-outline-success btn-circle mb-3">
                    <i class="fal fa-check"></i>
                </button>

                <button class="btn btn-success btn-circle mb-3">
                    <i class="fal fa-check"></i>
                </button>

                <button class="btn btn-outline-danger btn-circle mb-3">
                    <i class="fal fa-times"></i>
                </button>

                <button class="btn btn-danger btn-circle mb-3">
                    <i class="fal fa-times"></i>
                </button>

                <button class="btn btn-outline-danger btn-circle mb-3 small">
                    <i class="fal fa-times"></i>
                </button>

                <button class="btn btn-danger btn-circle mb-3 small">
                    <i class="fal fa-times"></i>
                </button>
                <br>
                <br>
                <br>
                <br>

                <button class="btn btn-social btn-circle mb-3 middle">
                    <i class="fab fa-telegram-plane"></i>
                </button>

                <button class="btn btn-social btn-circle mb-3 middle">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button class="btn btn-social btn-circle mb-3 middle">
                    <i class="fab fa-twitter"></i>
                </button>

                <button class="btn btn-social btn-circle mb-3 middle">
                    <i class="fab fa-linkedin-in"></i>

                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Формы</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 mt-3">
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
                @include("forms._textareaAvatar", [
                    "name"=>"text",
                    "value"=>"",
                    "label"=>"Text Aria:",
                    "placeholder"=>"Input Text",
                    "attributes"=>[
                        "rows"=>3
                    ],
                    "avatar"=>"/img/tiger.jpg",
                    "userName"=>"Константин Константинович",
                    "userSubtext"=>"sdfsdfkug1i23v6r32df",
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._textarea", [
                    "name"=>"text",
                    "value"=>"",
                    "label"=>"Text Aria:",
                    "placeholder"=>"Input Text",
                    "attributes"=>[
                        "rows"=>3
                    ],
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._input", [
                    "type"=>"text",
                    "name"=>"address",
                    "value"=>"gsfuo7232370462462083hef723",
                    "label"=>"Wallet address:",
                    "placeholder"=>"Wallet address:",
                    "validator"=>[
                        "uppercase"=>[
                            "text"=>"uppercase",
                            "show"=>true
                        ],
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._input", [
                    "type"=>"password",
                    "name"=>"password",
                    "value"=>"gsfuo7232370462462083hef723",
                    "label"=>"Password",
                    "eye"=>true,
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._input", [
                    "type"=>"password",
                    "name"=>"password",
                    "value"=>"gsfuo7232370462462083hef723",
                    "label"=>"Password",
                    "eye"=>false,
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._input", [
                    "type"=>"text",
                    "name"=>"text",
                    "value"=>"gsfuo7232370462462083hef723",
                    "label"=>"Text",
                    "textPrepand"=>"USD",
                    "textAppend"=>"USD",
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._input", [
                    "type"=>"number",
                    "name"=>"text",
                    "classFormGroup"=>"form-group--outline",
                    "value"=>"123123",
                    "label"=>"Text",
                    "textPrepand"=>"USD",
                    "textAppend"=>"USD",
                    "validator"=>[
                        "min"=>[
                            "value"=>6,
                            "text"=>"min 6 symbols",
                            "show"=>true
                        ]
                    ]
                ])
                @include("forms._select", [
                    "name"=>"select",
                    "formClass"=>"selectric--border",
                    "list"=>[
                        1=>"Role 1",
                        2=>"Role 2",
                        3=>"Role 3",
                        4=>"Role 4",
                        5=>"Role 5",
                    ],
                    "icon"=>'<i class="fas fa-user-clock selectric__icon"></i>'
                    /**
                    Если иконка не задана тегом i
                    то присвойте родительскому тегу класс "selectric__icon"
                    **/
                ])
                <div class="bg-light p-5">
                    @include("forms._select", [
                        "name"=>"select",
                        "class"=>"selectric--simple",
                        "label"=>"Select",
                        "list"=>[
                            1=>"Role 1",
                            2=>"Role 2",
                            3=>"Role 3",
                            4=>"Role 4",
                            5=>"Role 5",
                        ]
                    ])
                    @include("forms._select", [
                        "name"=>"select",
                        "class"=>"",
                        "label"=>"Select",
                        "list"=>[
                            1=>"Role 1",
                            2=>"Role 2",
                            3=>"Role 3",
                            4=>"Role 4",
                            5=>"Role 5",
                        ],
                        "icon"=>'<i class="fas fa-user-clock"></i>',

                    ])
                </div>
            </div>
            <div class="col-lg-6 ">
                <div style="height: 10rem"></div>


                <div class="py-5 my-5">
                    <form action="/">
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
                                        "popup"=>[
                                            "showCancelButton"=>true,
                                            "confirmButtonText"=>"DELETE",
                                            "cancelButtonText"=>"CANCEL",
                                            "reverseButtons"=>true,
                                            "html"=>'
                                            <div>
                    <h2 class="text-center text-black display-2_5">Delete account</h2>
                    <p class="small text-left text-danger d-flex justify-content-center align-items-center lh--1_4 mb-4 py-2">
                        <img class="img-fluid mr-2" style="height: 1rem; width: auto;" src="/img/bootstrap-theme-et/warning.svg" alt="warning">You did not save your LED
                    </p>
                    <p class="small text-left text-muted lh--1_4">
                        Deleting an account will result in its loss if you did not save the secret phrase (SEED).
                    </p>
                    <p class="small text-left text-muted lh--1_4">
                        Click the DELETE button to delete the account, or CANCEL to return to the previous screen.
                    </p>
                </div>
                                            ',

                                            "imageUrl"=>"/img/bootstrap-theme-et/warning.svg",
                                            "imageHeight"=>70,
                                            "imageAlt"=>"Delete account",
                                        ],
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
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto col-lg-4 d-flex justify-content-center">
                @include("modules.checkboxPhoto.checkboxPhoto",
                [
                    "name"=>"role_id",
                    "text"=>"Join as a Client",
                    "btnText"=>"Choose role (Click here)",
                    "img"=>"/img/tiger.jpg",
                    "widthLimitation"=>true
                ]
                )
            </div>
            <div class="col-auto col-lg-4 d-flex justify-content-center">
                @include("modules.checkboxPhoto.checkboxPhoto",
                [
                    "name"=>"role_id",
                    "text"=>"Join as a Client",
                    "btnText"=>"Choose role (Click here)",
                    "img"=>"/img/tiger.jpg",
                    "checked"=>true,
                    "widthLimitation"=>true
                ]
                )
            </div>
            <div class="col-auto col-lg-4 d-flex justify-content-center">
                @include("modules.checkboxPhoto.checkboxPhoto",
                [
                    "name"=>"role_id",
                    "text"=>"Join as a Client",
                    "btnText"=>"Choose role (Click here)",
                    "img"=>"/img/tiger.jpg",
                    "widthLimitation"=>true
                ]
                )
            </div>
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
        </div>
    </div>
    <div style="height: 50rem"></div>

@stop
