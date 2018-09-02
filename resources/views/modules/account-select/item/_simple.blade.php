<div class="{{$prefixClass}}account-select__item js-{{$prefixClass}}account-select__item {{ (isset($value) && $value === $key)?"selected":"" }}">
    @include("modules.account-select.item._content")
    <a class="{{$prefixClass}}account-select__box" href="#">
        <i class="{{$prefixClass}}account-select__box__icon fas fa-times"></i>
    </a>
</div>