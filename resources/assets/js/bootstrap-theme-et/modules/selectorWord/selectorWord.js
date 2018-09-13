(function ($,ClipboardJS) {
    $(document).on("click", function (event) {

        let target = $(event.target);

        if(target.is(".js-tag__close")){
            event.preventDefault();
            let tag = target.parents(".js-tag");
            if(tag && tag.length){
                tag.remove();
            }
            return;
        }

        if(target.parents(".js-data-select-copy").length){
            if(target.is("[data-select-copy]")){
                event.preventDefault();
                let selectCopy = target.attr("data-select-copy");
                target.clone().appendTo(selectCopy);
                console.log(target);
                return;
            }
        }

    });
    new ClipboardJS('.js-selectorWord__copy-words', {
        text: function(trigger) {
            let inputs = $(".js-selectorWord").find(".selectorWord__item input");
            let str = "";
            inputs.each(function () {
                str+=$(this).val()+" ";
            });
            return str;
        }
    });
})($,ClipboardJS);