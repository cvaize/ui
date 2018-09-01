<div class="{{$prefixClass}}account-select__item">
    <div class="{{$prefixClass}}account-select__wrapper-avatar">
        <div class="{{$prefixClass}}account-select__avatar" style="{{(isset($avatar) && mb_strlen($avatar) > 4)?
        'background-image: url('.$avatar.');':
        ((isset($default) && mb_strlen($default) > 4)?'background-image: url('.$default.');':
        "background: #e7f2ff;")}}"></div>
    </div>
    {{--<div class="embed-responsive embed-responsive-1by1">--}}
        {{--<div class="embed-responsive-item" style="-webkit-background-size: cover;background-size: cover;{{(isset($avatar) && mb_strlen($avatar) > 4)?--}}
        {{--'background: url('.$avatar.') no-repeat center center':--}}
        {{--((isset($default) && mb_strlen($default) > 4)?'background: url('.$default.') no-repeat center center;':--}}
        {{--"background: #e7f2ff;")}}">--}}
        {{--</div>--}}
    {{--</div>--}}
</div>