<div class="form-group form-group--textareaAvatar js-form-group {{ $errors->has($name) ? ' has-danger' : '' }}">
    @isset($label)
    <label class="form-control-label"
           for="input_{{ $type  ?? 'text'
     }}_{{ (str_slug($name)) }}"> {!!  $label !!} </label>
    @endisset
    <div class="">
        {{ Form::textarea(
        $name,
        old($name) ?? ($value ?? null),
        [
        'required'=>(isset($required) ? 'required' : null),
        'id'=>'input_'.($type ?? 'text').'_'.str_slug($name),
        'class'=>'form-control form-control-sm '. (isset($validator)? " js-validator ":"")
        .($errors->has($name) ? ' is-invalid ' : '')
        .($class ?? ''),
        'placeholder'=>($placeholder ?? null),
        'data-validator'=>(isset($validator)? json_encode($validator):null),
        'autocomplete'=>($autocomplete ?? 'on'),
        'data-value'=>($value ?? null),
        ]+($attributes ?? [])
        ) }}
        <div class="form-control__avatar">
            <div class="form-control__avatar__wrap-img">
                <div class="form-control__avatar__img" style="background-image: url({{$avatar ?? null}});"></div>
            </div>
            <div class="form-control__avatar__wrap-text">
                <div class="form-control__avatar__name text-truncate">
                    {{$userName ?? null}}
                </div>
                {{--Div ниже не трогать, в нем не должно быть пустого места, правильной отработки стилей :empty--}}
                <div class="form-control__avatar__subtext text-truncate">{{$userSubtext ?? null}}</div>
            </div>
        </div>
    </div>
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

        @isset($text)
    <small class="form-text text-muted"> {!! $text   !!}</small>
            @endisset
</div>
