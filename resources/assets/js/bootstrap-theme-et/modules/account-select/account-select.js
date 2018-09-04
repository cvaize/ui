
(function ($, swal, toastAlert) {
    let prefixClass = "module__";
    let jsPrefix = ".js-";
    let debug = true;
    if(debug && !swal){
        console.log("Подключите SweetAlert2");
    }
    if(debug && !toastAlert){
        console.log("Подключите SweetAlert2 ToastAlert");
    }
    let swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success w-100 btn-lg ml-3',
        cancelButtonClass: 'btn btn-danger w-100 btn-lg mr-3',
        buttonsStyling: false,
    });
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
                popup = {
                    title: 'Are you sure?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true,
                };
            }
            popup["width"] = "35rem";
            popup["padding"] = "3rem";
            swalWithBootstrapButtons(popup).then(function(result) {
                if (result.value) {
                    $.ajax(url, {
                        method: method,
                        data: data
                    }).then(function (data) {
                        if(data && data.success && data.success.length > 1 && data.title && data.title.length > 1){
                            toastAlert(data);
                        }else{
                            if(debug){
                                toastAlert({
                                    type: 'success',
                                    title: 'Debug message'
                                });
                            }
                        }

                    });
                }
            });
            return;
        }



    });

})(jQuery, swal, toastAlert);