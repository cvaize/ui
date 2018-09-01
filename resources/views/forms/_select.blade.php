<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "select_".$random_int."_".str_slug($name);
?>

<div class="form-group {{ $formClass??null }} {{ $errors->has($name) ? ' has-danger' : '' }}">
    @isset($label)
        <label class="form-control-label"

               for="{{$id_input}}">{!!  $label !!}&nbsp;</label>
    @endisset
            <div>
                {{ Form::select(
                $name,
                $list,
                old($name) ?? ($value ?? null),
                [
                'class'=>'form-control js-selectric '
                .($errors->has(str_replace(['[',']'],['.',''],$name)) ? ' is-invalid ' : '')
                .($class ?? ''),
                'required'=>(isset($required) ? 'required' : null),
                'placeholder'=>(isset($placeholder) ? $placeholder : null),
                'data-icon'=>$icon??null,
                'data-html'=>$contentHtml??null,
                'id'=>$id_input
                ]+($attributes ?? [])) }}
        </div>
    @if(isset($feedback) || $errors->has(str_replace(['[',']'],['.',''],$name)) === true)
        <div class="invalid-feedback ">{{ $feedback ?? $errors->first(str_replace(['[',']'],['.',''],$name)) }}</div>
    @endif

    @isset($text)
        <small class="form-text text-muted">{{ $text  }}.</small>
    @endisset
</div>
