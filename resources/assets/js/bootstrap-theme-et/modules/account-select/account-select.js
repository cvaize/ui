
(function ($, swal) {
    let prefixClass = "module__";
    let jsPrefix = ".js-";
    let debug = true;
    if(debug && !swal){
        console.log("Подключите SweetAlert2");
    }

    let setupPopupElement = $(".js-account-select-popup-delete");
    let setupPopup = setupPopupElement.attr("data-setup-popup");
    if(setupPopup.length > 4){
        setupPopup = JSON.parse(setupPopup);
        setupPopup.html = setupPopupElement.html();
    }else{
        setupPopup = {
            confirmButtonClass: 'btn btn-success w-100 btn-lg ml-3',
            cancelButtonClass: 'btn btn-danger w-100 btn-lg mr-3',
            buttonsStyling: false,
            title: 'Are you sure?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true,
            width: "35rem",
            padding: "3rem",
        };
    }

    if(setupPopup.imageUrl){
        $.ajax(setupPopup.imageUrl, {cache:true});
    }

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
    let isShow = function(){
        let list = $(jsPrefix+prefixClass+"account-select__wrap-list");
        let attrShow = list.attr("data-show");
        let response = true;
        if(!attrShow || attrShow !== "show"){
            response = false;
        }
        return response;
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
    let popupShow = false; // Сделано чтобы не скрывать список при работе с окнами
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

            if(debug){
                console.log("Выбрать option");
            }

            return;
        }



        if(!popupShow){
            //Скрить - Покзать список
            if(target.is(
                jsPrefix+prefixClass+"account-select"
            ) || target.parents(
                jsPrefix+prefixClass+"account-select"
            ).length > 0){
                event.preventDefault();
                showHide();

                if(debug){
                    console.log("Скрить - Покзать список");
                }
                return;
            }


            //Cкрывать список если он не скрыт при клике
            if(!target.is(
                jsPrefix+prefixClass+"account-select__wrapper"
            ) && target.parents(
                jsPrefix+prefixClass+"account-select__wrapper"
            ).length === 0 && isShow()){
                event.preventDefault();
                showHide("hide");

                if(debug){
                    console.log(target.parents(
                        jsPrefix+prefixClass+"account-select__wrapper"
                    ));
                    console.log(target, "Cкрывать список если он не скрыт при клике");
                }
                return;
            }
        }

        // Нажатие на кнопку удалить
        let parents = target.parents(
            jsPrefix+prefixClass+"account-select__delete"
        );
        if(target.is(
            jsPrefix+prefixClass+"account-select__delete"
        ) || parents.length > 0){

            if(debug){
                console.log("Нажатие на кнопку удалить");
            }
            popupShow = true;
            event.preventDefault();
            let element = target;
            if(!target.is(
                jsPrefix+prefixClass+"account-select__delete"
            )){
                element = parents;
            }
            let url = element.attr("data-url");
            let method = element.attr("data-method");
            let data = element.attr("data-data");
            let popup = element.attr("data-popup");
            if(data && data.length>0){
                data = JSON.parse(data);
            }else{
                data = {};
            }
            if(popup && popup.length>0){
                popup = JSON.parse(popup);
            }else{
                popup = setupPopup;
            }
            swal(popup).then(function(result) {
                if (result.value) {
                    $.ajax(url, {
                        method: method,
                        data: data
                    }).then(function (data) {
                        if(data && data.type && data.type === 'success'){
                            if(data.redirect){
                                let href = "/";
                                if(data.redirect.length){
                                    href = data.redirect;
                                }
                                document.location.href = href;
                            }else{
                                let elementDelete = element.parents(jsPrefix+prefixClass+"account-select__item");
                                let index = elementDelete.find(jsPrefix+prefixClass+"account-select__content").attr("data-index");
                                if(index){
                                    $(jsPrefix+prefixClass+"account-select__content[data-index='"+index+"']").remove();
                                }
                                elementDelete.remove();
                                let content = $(jsPrefix+prefixClass+"account-select__content").get(0);
                                if(content){
                                    selectOption($(content));
                                }
                            }
                        }
                        messageHandler(data);
                    });
                }
                setTimeout(function () {
                    popupShow = false;
                }, 300);
            });
            return;
        }



    });

})(jQuery, swal, messageHandler);