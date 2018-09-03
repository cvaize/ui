/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(5);
module.exports = __webpack_require__(6);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * EBS
 */

// require('selectric'); // http://selectric.js.org/

__webpack_require__(2);

__webpack_require__(3);

//Modules
__webpack_require__(4);

/***/ }),
/* 2 */
/***/ (function(module, exports) {


(function ($) {
    $(".js-form-control--checkbox-eye").on("change", function () {
        var input = $(this).attr("data-input");
        input = $(input);
        // input.focus();
        var type = input.attr("type");
        if (type === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $('.js-input-group-focus').focus(function () {
        var inputGroup = $(this).parents(".js-input-group");
        inputGroup.addClass("active");
    });
    $('.js-input-group-focus').focusout(function () {
        var inputGroup = $(this).parents(".js-input-group");
        inputGroup.removeClass("active");
    });
    $('.js-selectric').selectric({
        labelBuilder: function labelBuilder(currItem) {
            var icon = currItem.element.parents(".js-selectric").attr("data-icon");
            return (icon && icon.length > 4 ? icon : '') + currItem.text;
        }
    });
})($);

/***/ }),
/* 3 */
/***/ (function(module, exports) {

(function ($) {
    var navbarHamburger = $(".js-navbar__hamburger");
    var navbarCollapse = $(".js-navbar-collapse");
    var navbarBackground = $(".js-navbar-background");

    navbarHamburger.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
    });
    navbarBackground.on("click", function (event) {
        event.preventDefault();
        navbarHamburger.toggleClass("is-active");
        navbarCollapse.toggleClass("show");
    });
})($);

/***/ }),
/* 4 */
/***/ (function(module, exports) {


(function ($) {
    var prefixClass = "module__";
    var jsPrefix = ".js-";

    //Скрить - Покзать список
    var showHide = function showHide(command) {
        var list = $(jsPrefix + prefixClass + "account-select__wrap-list");
        if (command === "hide") {
            list.removeClass("show");
            list.attr("data-show", "hide");
        }
        if (command === "show") {
            list.addClass("show");
            list.attr("data-show", "show");
        }
        if (command) {
            return;
        }

        var attrShow = list.attr("data-show");
        if (!attrShow || attrShow !== "show") {
            list.addClass("show");
            list.attr("data-show", "show");
        } else {
            list.removeClass("show");
            list.attr("data-show", "hide");
        }
    };

    //Выбрать option
    var selectOption = function selectOption(content) {
        var select = $(jsPrefix + prefixClass + "account-select__select");
        var index = content.attr("data-index");
        if (index) {

            var list = $(jsPrefix + prefixClass + "account-select__wrap-list");
            var items = list.find(jsPrefix + prefixClass + "account-select__item");
            items.removeClass("selected");
            content.parents(jsPrefix + prefixClass + "account-select__item").addClass("selected");

            list.removeClass("show");
            list.attr("data-show", "hide");

            var currentBox = $(jsPrefix + prefixClass + "account-select");
            currentBox.find(jsPrefix + prefixClass + "account-select__content").remove();
            content.clone().prependTo(currentBox);

            var option = select.find('[data-index="' + index + '"]');
            var value = option.val();
            select.val(value).change();
        }
    };

    $(document).on("click", function (event) {

        var target = $(event.target);

        //Выбрать option
        var content = target.parents(jsPrefix + prefixClass + "account-select__list " + jsPrefix + prefixClass + "account-select__content");
        if (target.is(jsPrefix + prefixClass + "account-select__list " + jsPrefix + prefixClass + "account-select__content") || content.length > 0) {
            event.preventDefault();
            if (content.length === 0) {
                content = target;
            }
            selectOption(content);
        }

        //Скрить - Покзать список
        if (target.is(jsPrefix + prefixClass + "account-select") || target.parents(jsPrefix + prefixClass + "account-select").length > 0) {
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

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);