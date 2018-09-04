<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "input_".$random_int."_".str_slug($name);
?>

<div class="checkboxIcon__wrapper {{ $wrapperClass ?? null }}">
    {{ Form::checkbox($name,($value ?? null),($checked ?? old($name) ??
    $frd['checked'] ?? null),
    [
        'class'=>'checkboxIcon '.($class ?? null),
        'required'=>(isset($required) ? 'required' : null),
        'id'=>$id_input

    ]+($attributes ?? [])
    ) }}
    <label class="checkboxIcon__label {{ $labelClass ?? null }}
{{(isset($widthLimitation) && $widthLimitation === true)? "checkboxIcon__label--width-limitation":""}}"
           for="{{$id_input}}">

        <div class="checkboxIcon__wrapper-avatar {{ $wrapperAvatarClass ?? null }}">
            <div class="checkboxIcon__avatar {{ $avatarClass ?? null }}">
                <i class="{{$icon ?? "fab fa-earlybirds"}}"></i>
            </div>
        </div>
        @isset($text)
            <div class="checkboxIcon__text {{ $textClass ?? null }}">
                {!!  $text ?? null  !!}
            </div>
        @endisset
        <div class="checkboxIcon__button">
            <div class="checkboxIcon__button__box--no-checked">
                {!!  $btnText ?? null  !!}
            </div>
            <div class="checkboxIcon__button__box--checked">
                {!!  $btnTextChecked ?? null  !!}
            </div>
        </div>
    </label>
</div>
