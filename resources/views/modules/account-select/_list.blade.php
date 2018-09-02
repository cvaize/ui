<div class="{{$prefixClass}}account-select__wrap-list js-{{$prefixClass}}account-select__wrap-list">
    <div class="{{$prefixClass}}account-select__list js-{{$prefixClass}}account-select__list">
        @foreach($list as $key=>$item)
            @include("modules.account-select.item._simple", $item+["key"=>$key])
        @endforeach
    </div>
    <div class="{{$prefixClass}}account-select__item--add">
        @include("modules.account-select.item._add")
    </div>
</div>