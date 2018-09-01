<?php
/**
 * Название модуля Account-Select
 * Изменяя префикс измените его и в scss в файле app.scss
 */

$prefixClass = "module__"
?>

<div class="{{$prefixClass}}account-select__wrapper">
    <div class="{{$prefixClass}}account-select">
        @include("modules.account-select.item._simple",
            [
            "avatar"=>"/img/tiger.jpg"
            ]
        )
    </div>
    {{--@include("modules.account-select._list")--}}
</div>
