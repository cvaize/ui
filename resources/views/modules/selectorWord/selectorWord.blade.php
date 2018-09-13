

<div class="selectorWord js-selectorWord {{ (isset($disable) ?? $disable === true)? " selectorWord--disable ":null }}">
    @if(isset($words))
        @foreach($words as $item)
            @include("modules.selectorWord._tag", [
            "name"=>$names??null,
            "text"=>$item["text"]??null,
            "value"=>$item["value"]??null,
            "close"=> true,
            "class"=>"selectorWord__item"
            ])
        @endforeach
    @endif
</div>