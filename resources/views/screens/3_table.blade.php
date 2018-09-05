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
    <div class="table">
        <div class="table__row">
            <div class="container">
                <div class="row align-items-center justify-content-center py-3">
                    <div class="col-lg-2">
                        @include("forms._select", [
                    "name"=>"select",
                    "formClass"=>"",
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
                    </div>
                    <div class="col-lg-3">
                        @include("forms._select", [
                    "name"=>"select",
                    "formClass"=>"",
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
                    </div>
                    <div class="col-lg-3">
                        @include("forms._select", [
                    "name"=>"select",
                    "formClass"=>"",
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
                    </div>
                    <div class="col-lg-4">
                        @include("forms._select", [
                    "name"=>"select",
                    "formClass"=>"",
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
                    </div>
                </div>
            </div>
        </div>
        @foreach(range(1, 20) as $index)
            <div class="table__row">
                <div class="container">
                    <div class="row align-items-center justify-content-center py-3">
                        <div class="col-lg-2">
                            5:35 am | <b>17 Aug 2018</b>
                        </div>
                        <div class="col-lg-3">
                            Dynasty Support Trust <br>
                            <b>Regular EEG & Neurofeedback</b>
                        </div>
                        <div class="col-lg-3">
                            Expert: Solution consultant @43g45
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex">
                                <div class="js-clamp-2-lines">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto at consequuntur deleniti ducimus error esse ex in nesciunt numquam odio optio placeat quae quaerat quam qui quod reiciendis repellendus reprehenderit repudiandae similique tempora unde veniam, voluptates voluptatibus. Aliquid eveniet illum laboriosam maiores modi nam qui! Ad architecto atque blanditiis ducimus ea, impedit libero maiores minima mollitia nam nesciunt quae quaerat quibusdam rem ut veniam veritatis. Cupiditate earum eos omnis optio soluta. Autem esse expedita explicabo illum molestiae molestias nihil nulla quaerat, qui sunt. Amet asperiores, corporis dolores explicabo iste maxime minus necessitatibus nisi non, nostrum officiis quis repudiandae sed.
                                </div>
                                <div class="align-content-end d-flex pl-2">
                                    <div class="btn-tooltip mt-auto" data-toggle="tooltip" data-tippy-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto at consequuntur deleniti ducimus error esse ex in nesciunt numquam odio optio placeat quae quaerat quam qui quod reiciendis repellendus reprehenderit repudiandae similique tempora unde veniam, voluptates voluptatibus. Aliquid eveniet illum laboriosam maiores modi nam qui! Ad architecto atque blanditiis ducimus ea, impedit libero maiores minima mollitia nam nesciunt quae quaerat quibusdam rem ut veniam veritatis. Cupiditate earum eos omnis optio soluta. Autem esse expedita explicabo illum molestiae molestias nihil nulla quaerat, qui sunt. Amet asperiores, corporis dolores explicabo iste maxime minus necessitatibus nisi non, nostrum officiis quis repudiandae sed.">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pb-5">
        <button class="btn btn-secondary my-5">LOAD MORE</button>
    </div>
@stop