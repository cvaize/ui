<?php
/**
 * Название модуля Account-Select
 * Изменяя префикс измените его и в scss в файле account-select.scss и js файле account-select.js
 */

$prefixClass = "module__"
?>

<div class="{{$prefixClass}}account-select__wrapper">
    @include("modules.account-select._hide-select")
    <div class="{{$prefixClass}}account-select js-{{$prefixClass}}account-select">
        <?php
        $keys = array_keys($list);
        $firstKey = $keys[0];
        ?>
        @include("modules.account-select.item._content", isset($list[$value])?($list[$value]+["key"=>$value]):($list[$firstKey]+["key"=>$firstKey]))

        <a class="{{$prefixClass}}account-select__box" href="#">
            <i class="{{$prefixClass}}account-select__box__icon fas fa-caret-down"></i>
        </a>
    </div>
    @include("modules.account-select._list")
</div>
