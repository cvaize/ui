//https://www.npmjs.com/package/password-validator
let passwordValidator = require('password-validator');



(function ($, passwordValidator) {


    let createValidation = function(th, data){
        // Create a schema
        let schema = new passwordValidator();
        if(data.min && data.min.value){
            schema = schema.is().min(data.min.value);
        }
        if(data.max && data.max.value){
            schema = schema.is().max(data.min.value);
        }
        if(data.uppercase){
            schema = schema.has().uppercase();
        }
        if(data.lowercase){
            schema = schema.has().lowercase();
        }
        if(data.digits){
            schema = schema.has().digits();
        }
        if(data.spaces){
            schema = schema.has().not().spaces();
        }
        let element = $(th);
        let mark = function(list){
            let invalidFeedback = element.parents(".js-form-group").find(".js-invalid-feedback");
            if(!invalidFeedback[0]){return;}
            let rectangles = invalidFeedback.find(".js-invalid-feedback__rectangles");
            let dataShow = 0;
            Object.keys(data).forEach(function (elem) {
                if(data[elem].show){
                    dataShow+=1;
                }
            });
            let clearedList = [];
            list.forEach(function (elem, index) {
                if(data[elem] && data[elem].show){
                    clearedList.push(elem);
                }
            });
            dataShow -=clearedList.length;
            rectangles.each(function () {
                $(this).removeClass("active");
            });
            for(let i = 0; i < dataShow; i++){
                $(rectangles[i]).addClass("active");
            }
            if(clearedList[0] && data[clearedList[0]] && data[clearedList[0]].text){
                invalidFeedback.find(".js-invalid-feedback__text").html(data[clearedList[0]].text);
            }
            if(rectangles.length === dataShow){
                $(th).parents(".js-form-group").removeClass("is-invalid");
            }else{
                $(th).parents(".js-form-group").addClass("is-invalid");
            }
        };
        element.on("input",function () {
            let val = $(this).val();
            mark(schema.validate(val, { list: true }));
        });

    };

    $(".js-validator").each(function () {
        let validatorData = $(this).attr("data-validator");
        if(validatorData && validatorData.length > 4){
            validatorData = JSON.parse(validatorData);
            createValidation(this, validatorData);
        }
    });

    $(document).on("click", function (event) {
        let target = $(event.target);

        //Start - Присваиваем фокус на группу input
        if(target.is(".js-form-group")){
            target.addClass("active");
            $(".js-form-group").each(function () {
                if(event.target !== this){
                    $(this).removeClass("active");
                }
            });
        }
        let formGroup = target.parents(".js-form-group");
        if(formGroup.length > 0){
            formGroup.addClass("active");
            $(".js-form-group").each(function () {
                if(formGroup.get(0) !== this){
                    $(this).removeClass("active");
                }
            });
        }
        if(!target.is(".js-form-group") && formGroup.length === 0){
            $(".js-form-group.active").removeClass("active");
        }
        //End
    });

    $(".js-form-control--checkbox-eye").on("change", function () {
        let input = $(this).attr("data-input");
        input = $(input);
        // input.focus();
        let type = input.attr("type");
        if(type === "password"){
            input.attr("type", "text");
        }else{
            input.attr("type", "password");
        }
    });

    $('.js-selectric').selectric({
        labelBuilder: function(currItem) {
            let icon = currItem.element.parents(".js-selectric").attr("data-icon");
            return ((icon && icon.length > 4)? icon : '') + currItem.text;
        }
    });
})($, passwordValidator);