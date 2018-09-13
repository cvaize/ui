<div class="tag js-tag tag--success {{ isset($class)? $class : "" }}"
@if(isset($selectCopy))
data-select-copy="{{$selectCopy}}"
@endif
        >
    {{ $text ?? "empty" }}
    {{ Form::hidden($name ?? null, $value ?? null) }}
    @if(isset($close) && $close === true)
        <i class="ml-1 js-tag__close fal fa-times"></i>
    @endif
</div>