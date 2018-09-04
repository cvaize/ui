<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "input_".$random_int."_".str_slug($name);
?>
<div class="form-group form-check {{ $formClass ?? null }}">
    {{ Form::checkbox($name,($value ?? null),($checked ?? old($name) ??
    $frd['checked'] ?? null),
    [
        'class'=>'form-check-input '.($class ?? null),
        'required'=>(isset($required) ? 'required' : null),
        'id'=>$id_input

    ]+($attributes ?? [])
    ) }}

    <label class="form-check-label" for="{{$id_input}}">
        {!! $label ?? null  !!}
    </label>

    @isset($text)
        <p class="text-muted">
            {!!  $text ?? null  !!}
        </p>
    @endisset
</div>
