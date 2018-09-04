<div class="d-none">
    <select class="js-{{$prefixClass}}account-select__select" name="{{$name??null}}" {{(isset($required) && $required === true)? "required": ""}}>
        @if(isset($placeholder))
            <option value="">{{$placeholder}}</option>
        @endif
        @foreach($list as $key=>$item)
            <option data-index="{{$key}}" value="{{$key}}"{{ (isset($value) && $key == $value)?" selected":"" }}>{{$item["name"]}}</option>
        @endforeach
    </select>
</div>