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
            </div>
            <div class="col-6">
                <img src="/img/1.png" alt="">
            </div>
            <div class="col-6 bg-light ">
                <div class="dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="fas fa-wallet mr-1"></i>My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-chart-line mr-1"></i>Active Trust</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-history mr-1"></i>History of Trust</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt mr-1"></i>Sing Out</a>
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
                <button class="btn btn-primary btn-text-small mb-3">CONTINUE</button>
                <button class="btn btn-outline-primary font-weight-bold mb-3">CHOOSE TEMPLATE</button>
                <button class="btn btn-outline-primary btn--text-small font-weight-bold mb-3">CHOOSE TEMPLATE</button>
                <button class="btn btn-primary mb-3">LOAD MORE</button>
                <button class="btn btn-primary btn--rounded btn--text-small mb-3"><i class="fas fa-question-circle fa-2x"></i>GET HELP</button>

                {{--<button class="btn btn-primary btn-block mb-3">ENTER</button>--}}
                {{--<button class="btn btn-primary btn-block mb-3">CONTINUE</button>--}}
                {{--<button class="btn btn-primary btn-text-small btn-block mb-3">CONTINUE</button>--}}
                {{--<button class="btn btn-outline-primary btn-block mb-3 font-weight-bold">CHOOSE TEMPLATE</button>--}}
                {{--<button class="btn btn-outline-primary btn-block btn-text-small mb-3 font-weight-bold">CHOOSE TEMPLATE</button>--}}
                {{--<button class="btn btn-primary btn-rounded btn-text-small mb-3"><i class="fas fa-question-circle fa-2x"></i>GET HELP</button>--}}

            </div>
            <div class="col-6">
                <img src="/img/2.png" alt="">

            </div>
            <div class="col-6">
                <button class="btn btn-outline-success btn-add rounded-circle mb-3"></button>

                <button class="btn btn-success btn-add rounded-circle mb-3"></button>



                <button class="btn btn-success btn-active rounded-circle mb-3"></button>

                <button class="btn btn-outline-success btn-active rounded-circle mb-3"></button>



                <button class="btn btn-outline-danger btn-close rounded-circle mb-3"></button>

                <button class="btn btn-danger btn-close rounded-circle mb-3"></button>



                <button class="btn btn-outline-success btn-close rounded-circle mb-3"></button>

                <button class="btn btn-success btn-close rounded-circle mb-3"></button>



                <button class="btn btn-outline-danger btn-close btn-close--sm rounded-circle mb-3"></button>

                <button class="btn btn-danger btn-close btn-close--sm rounded-circle btn-sm mb-3"></button>
            </div>
        </div>
    </div>

    <div style="height: 50rem"></div>

    <script src="{{mix("/js/app.js")}}"></script>
    </body>
</html>
