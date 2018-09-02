<div class="{{$prefixClass}}account-select__content js-{{$prefixClass}}account-select__content" data-index="{{$key??null}}">
    <div class="{{$prefixClass}}account-select__wrapper-avatar">
        <div class="{{$prefixClass}}account-select__avatar" style="{{(isset($avatar) && mb_strlen($avatar) > 4)?
        'background-image: url('.$avatar.');':
        ((isset($default) && mb_strlen($default) > 4)?'background-image: url('.$default.');':
        "background: #e7f2ff;")}}"></div>
    </div>
    <div class="module__account-select__wrapper-text">
        <div class="{{$prefixClass}}account-select__name text-truncate">
            {{$name??null}}
        </div>
        <div class="{{$prefixClass}}account-select__subtext text-truncate">
            {{$subtext??null}}
        </div>
    </div>
</div>