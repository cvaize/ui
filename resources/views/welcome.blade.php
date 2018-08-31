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

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
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
                    <div class="col-6">
                        <img src="/img/4.png" alt="">
                    </div>
                    <div class="col-6">
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
            <div class="col-6">
                <img src="/img/1.png" alt="">
            </div>
            <div class="col-6 bg-light ">
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="fas fa-wallet mr-2"></i>My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-chart-line mr-2"></i>Active Trust</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-history mr-2"></i>History of Trust</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-2"></i>Sing Out</a>
                    </div>
                    <button class="dropdown-toggle"
                            data-offset="-20px"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <img src="/img/3.png" alt="">

            </div>
            <div class="col-6">

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
                    <div class="col-6">
                        <button class="btn btn-primary mb-3 btn-block btn-lg">CONTINUE</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary mb-3 btn-block btn-lg small">CONTINUE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block btn-lg">CHOOSE TEMPLATE</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-primary font-weight-bold mb-3 btn-block btn-lg small">CHOOSE TEMPLATE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-secondary font-weight-bold mb-3 btn-block btn-lg">CHOOSE TEMPLATE</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-secondary font-weight-bold mb-3 btn-block btn-lg small">CHOOSE TEMPLATE</button>
                    </div>
                </div>



                <button class="btn btn-primary mb-3 btn-block btn-lg">LOAD MORE</button>

                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block btn-lg">
                            <i class="fas fa-question-circle fa-1_4x"></i>
                            <span class="inner">
                            GET HELP
                            </span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary btn--with-i btn--rounded mb-3 btn-block btn-lg small">
                            <i class="fas fa-question-circle fa-1_4x"></i>
                            <span class="inner">
                            GET HELP
                            </span>
                        </button>
                    </div>
                </div>




            </div>
            <div class="col-6">
                <img src="/img/2.png" alt="">

            </div>
            <div class="col-6">
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

                <button class="btn btn-secondary btn-circle mb-3 middle">
                    <i class="fab fa-telegram-plane"></i>
                </button>

                <button class="btn btn-secondary btn-circle mb-3 middle">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button class="btn btn-secondary btn-circle mb-3 middle">
                    <i class="fab fa-twitter"></i>
                </button>

                <button class="btn btn-secondary btn-circle mb-3 middle">
                    <i class="fab fa-linkedin-in"></i>
                </button>
            </div>
        </div>
    </div>

    <div style="height: 50rem"></div>

    <script src="{{mix("/js/app.js")}}"></script>
    </body>
</html>
