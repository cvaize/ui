<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "input_".$random_int."_".str_slug($name);
?>

<div class="checkboxPhoto__wrapper {{ $wrapperClass ?? null }}">
    {{ Form::checkbox($name,($value ?? null),($checked ?? old($name) ??
    $frd['checked'] ?? null),
    [
        'class'=>'checkboxPhoto '.($class ?? null),
        'required'=>(isset($required) ? 'required' : null),
        'id'=>$id_input

    ]+($attributes ?? [])
    ) }}
    <label class="checkboxPhoto__label {{ $labelClass ?? null }}
{{(isset($widthLimitation) && $widthLimitation === true)? "checkboxPhoto__label--width-limitation":""}}"
           for="{{$id_input}}">

        <div class="checkboxPhoto__wrapper-avatar {{ $wrapperAvatarClass ?? null }}">
            <div class="checkboxPhoto__avatar {{ $avatarClass ?? null }}" style="background-image: url({{$img??null}});"></div>
        </div>
        @isset($text)
            <div class="checkboxPhoto__text {{ $textClass ?? null }}">
                {!!  $text ?? null  !!}
            </div>
        @endisset
        <div class="checkboxPhoto__button">
            <div class="checkboxPhoto__button__box--no-checked">
                {!!  $btnText ?? null  !!}</div>
            <div class="checkboxPhoto__button__box--checked">
                <i class="fas fa-check"></i>
            </div>
        </div>
    </label>
</div>
