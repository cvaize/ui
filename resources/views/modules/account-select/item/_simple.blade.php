<div class="{{$prefixClass}}account-select__item js-{{$prefixClass}}account-select__item {{ (isset($value) && $value === $key)?"selected":"" }}">
    @include("modules.account-select.item._content")
    @if(isset($delete) && isset($delete["active"]) && $delete["active"] === true)
    <div class="{{$prefixClass}}account-select__box js-{{$prefixClass}}account-select__delete"
         data-url="{{$delete["url"] ?? null}}"
         data-method="{{$delete["method"] ?? null}}"
         data-data="{{json_encode($delete["data"]) ?? null}}"
    >
        <i class="{{$prefixClass}}account-select__box__icon fas fa-times"></i>
    </div>
    @endif
</div>