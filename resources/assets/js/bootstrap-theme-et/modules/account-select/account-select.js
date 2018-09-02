
(function ($) {
    let prefixClass = "module__";
    let jsPrefix = ".js-";

    //Скрить - Покзать список
    let showHide = function(command){
        let list = $(jsPrefix+prefixClass+"account-select__wrap-list");
        if(command === "hide"){
            list.removeClass("show");
            list.attr("data-show", "hide");
        }
        if(command === "show"){
            list.addClass("show");
            list.attr("data-show", "show");
        }
        if(command){return;}

        let attrShow = list.attr("data-show");
        if(!attrShow || attrShow !== "show"){
            list.addClass("show");
            list.attr("data-show", "show");
        }else{
            list.removeClass("show");
            list.attr("data-show", "hide");
        }
    };

    //Выбрать option
    let selectOption = function(content){
        let select = $(jsPrefix+prefixClass+"account-select__select");
        let index = content.attr("data-index");
        if(index){

            let list = $(jsPrefix+prefixClass+"account-select__wrap-list");
            let items = list.find(jsPrefix+prefixClass+"account-select__item");
            items.removeClass("selected");
            content.parents(jsPrefix+prefixClass+"account-select__item").addClass("selected");

            list.removeClass("show");
            list.attr("data-show", "hide");

            let currentBox = $(jsPrefix+prefixClass+"account-select");
            currentBox.find(jsPrefix+prefixClass+"account-select__content").remove();
            content.clone().prependTo(currentBox);

            let option = select.find('[data-index="'+index+'"]');
            let value = option.val();
            select.val(value).change();
        }
    };

    $(document).on("click", function (event) {

        let target = $(event.target);

        //Выбрать option
        let content = target.parents(
            jsPrefix+prefixClass+"account-select__list "+
            jsPrefix+prefixClass+"account-select__content"
        );
        if(target.is(
            jsPrefix+prefixClass+"account-select__list "+
            jsPrefix+prefixClass+"account-select__content"
        ) || content.length > 0){
            event.preventDefault();
            if(content.length === 0){content = target;}
            selectOption(content);
        }


        //Скрить - Покзать список
        if(target.is(
            jsPrefix+prefixClass+"account-select"
        ) || target.parents(
            jsPrefix+prefixClass+"account-select"
        ).length > 0){
            event.preventDefault();
            showHide();
        }

        //TODO: Сделать скрытие селектора при клике на элементы не относящиеся к селектору
        // if(target.is(
        //     jsPrefix+prefixClass+"account-select__wrapper"
        // ) && target.parents(
        //     jsPrefix+prefixClass+"account-select__wrapper"
        // ).length > 0){
        //     console.log(12313);
        //     showHide("hide");
        // }



    });

})(jQuery);