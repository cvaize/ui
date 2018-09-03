
(function ($) {
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
    $('.js-input-group-focus').focus(function () {
        let inputGroup = $(this).parents(".js-input-group");
        inputGroup.addClass("active");
    });
    $('.js-input-group-focus').focusout(function () {
        let inputGroup = $(this).parents(".js-input-group");
        inputGroup.removeClass("active");
    });
    $('.js-selectric').selectric({
        labelBuilder: function(currItem) {
            let icon = currItem.element.parents(".js-selectric").attr("data-icon");
            return ((icon && icon.length > 4)? icon : '') + currItem.text;
        }
    });
})($);