<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "input_".$random_int."_".str_slug($name);
?>
<div class="selectAvatar__wrapper {{ $wrapperClass ?? null }}">
    {{ Form::radio($name,($value ?? null),($checked ?? old($name) ??
    $frd['checked'] ?? null),
    [
        'class'=>'selectAvatar '.($class ?? null),
        'required'=>(isset($required) ? 'required' : null),
        'id'=>$id_input

    ]+($attributes ?? [])
    ) }}
    <label class="selectAvatar__label {{ $labelClass ?? null }}"
           for="{{$id_input}}">

        <div class="selectAvatar__wrapper-avatar {{ $wrapperAvatarClass ?? null }}">
            <div class="selectAvatar__avatar {{ $avatarClass ?? null }}" style="background-image: url({{$img??null}});">
                <div class="selectAvatar__avatar__select">
                    <i class="fas fa-check "></i>
                </div>
            </div>
        </div>
    </label>
</div>

