<?php
$name = $name ?? "";
$random_int = random_int(1, 100000);
$id_input = "input_".$random_int."_".str_slug($name);
?>

<div class="form-group js-form-group {{ $classFormGroup ?? "" }} {{ ((isset($errors) && isset($name))?($errors->has($name) ? ' has-danger' : ''): null) }}">
    @isset($label)
    <label class="form-control-label"
           for="{{$id_input}}"> {!!  $label !!} </label>
    @endisset
    @isset($text)
        <p class="form-text text-muted"> {!! $text   !!}</p>
    @endisset
    @if(isset($type) && $type === 'password' && isset($eye) && $eye === true)
            <div class="input-group">
                {{ Form::input(
                'password',
                $name ?? null,
                isset($name)?old($name) ?? ($value ?? null):null,
                [
                'required'=>(isset($required) ? 'required' : null),
                'id'=>$id_input,
                'class'=>'form-control '. (isset($validator)? " js-validator ":"")
                .($errors->has($name) ? ' is-invalid ' : '')
                .($class ?? ''),
                'data-validator'=>(isset($validator)? json_encode($validator):null),
                'placeholder'=>($placeholder ?? null),
                'autocomplete'=>($autocomplete ?? 'on'),
                'data-value'=>($value ?? null),
                ]+($attributes ?? [])
                ) }}
                <div class="input-group-append">
                    <div class="input-group-text {{($errors->has($name) ? ' is-invalid ' : '')}} p-0">
                        <label class="input-group--checkbox-eye">
                            <input class="form-control--checkbox-eye js-form-control--checkbox-eye" type="checkbox" data-input="#{{$id_input}}">
                            <i class="fas fa-eye-slash input-group--down-eye"></i>
                            <i class="fas fa-eye input-group--up-eye"></i>
                        </label>
                    </div>
                </div>
            </div>
        @elseif(isset($textPrepand) || isset($textAppend))
            <div class="input-group">
                @if(isset($textPrepand))
                <div class="input-group-prepend">
                    <div class="input-group-text {{($errors->has($name) ? ' is-invalid ' : '')}}">
                        {{$textPrepand}}
                    </div>
                </div>
                @endif
                {{ Form::input(
                $type ?? 'text',
                $name ?? null,
                isset($name)?old($name) ?? ($value ?? null):null,
                [
                'required'=>(isset($required) ? 'required' : null),
                'id'=>$id_input,
                'class'=>'form-control form-control'. (isset($validator)? " js-validator ":"")
                .($errors->has($name) ? ' is-invalid ' : '')
                .($class ?? ''),
                'placeholder'=>($placeholder ?? null),
                'data-validator'=>(isset($validator)? json_encode($validator):null),
                'autocomplete'=>($autocomplete ?? 'on'),
                'data-value'=>($value ?? null),
                ]+($attributes ?? [])
                ) }}
                    @if(isset($textAppend))
                <div class="input-group-append">
                    <div class="input-group-text {{($errors->has($name) ? ' is-invalid ' : '')}}">
                        {{$textAppend}}
                    </div>
                </div>
                    @endif
            </div>
        @else
            {{ Form::input(
            $type ?? 'text',
            $name ?? null,
            isset($name)?old($name) ?? ($value ?? null):null,
            [
            'required'=>(isset($required) ? 'required' : null),
            'id'=>$id_input,
            'class'=>'form-control form-control '. (isset($validator)? " js-validator ":"")
            .($errors->has($name) ? ' is-invalid ' : '')
            .($class ?? ''),
            'placeholder'=>($placeholder ?? null),
                'data-validator'=>(isset($validator)? json_encode($validator):null),
            'autocomplete'=>($autocomplete ?? 'on'),
            'data-value'=>($value ?? null),
            ]+($attributes ?? [])
            ) }}
        @endif

        <div class="invalid-feedback js-invalid-feedback">
            <span class="invalid-feedback__text js-invalid-feedback__text">
                min 6 symbols
                @if(isset($feedback) || $errors->has($name) === true)
                    {{ $feedback ?? $errors->first($name) }}
                @endif
            </span>
            @if(isset($validator))
                @foreach($validator as $item)
                    @if(isset($item["show"]) && $item["show"] === true)
                        <div class="invalid-feedback__rectangles js-invalid-feedback__rectangles"></div>
                    @endif
                @endforeach
            @endif
        </div>
</div>
