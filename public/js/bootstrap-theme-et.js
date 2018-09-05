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

__webpack_require__(13);
//https://github.com/josephschmitt/Clamp.js
$(".js-clamp-2-lines").each(function () {
    $clamp(this, { clamp: 2 });
});
$(function () {
    //https://atomiks.github.io/tippyjs/
    tippy('[data-toggle="tooltip"]', {
        delay: 0,
        arrow: true,
        arrowType: 'round',
        size: 'large',
        duration: 300,
        animation: 'shift-toward'
    });
});

window.toastAlert = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

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


(function ($, swal, toastAlert) {
    var prefixClass = "module__";
    var jsPrefix = ".js-";
    var debug = true;
    if (debug && !swal) {
        console.log("Подключите SweetAlert2");
    }
    if (debug && !toastAlert) {
        console.log("Подключите SweetAlert2 ToastAlert");
    }
    var swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success w-100 btn-lg ml-3',
        cancelButtonClass: 'btn btn-danger w-100 btn-lg mr-3',
        buttonsStyling: false
    });
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
    var isShow = function isShow() {
        var list = $(jsPrefix + prefixClass + "account-select__wrap-list");
        var attrShow = list.attr("data-show");
        var response = true;
        if (!attrShow || attrShow !== "show") {
            response = false;
        }
        return response;
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

            if (debug) {
                console.log("Выбрать option");
            }

            return;
        }

        //Скрить - Покзать список
        if (target.is(jsPrefix + prefixClass + "account-select") || target.parents(jsPrefix + prefixClass + "account-select").length > 0) {
            event.preventDefault();
            showHide();

            if (debug) {
                console.log("Скрить - Покзать список");
            }
            return;
        }

        //Cкрывать список если он не скрыт при клике
        if (!target.is(jsPrefix + prefixClass + "account-select__wrapper") && target.parents(jsPrefix + prefixClass + "account-select__wrapper").length === 0 && isShow()) {
            event.preventDefault();
            showHide("hide");

            if (debug) {
                console.log(target.parents(jsPrefix + prefixClass + "account-select__wrapper"));
                console.log(target, "Cкрывать список если он не скрыт при клике");
            }
            return;
        }

        // Нажатие на кнопку удалить
        var parents = target.parents(jsPrefix + prefixClass + "account-select__delete");
        if (target.is(jsPrefix + prefixClass + "account-select__delete") || parents.length > 0) {

            if (debug) {
                console.log("Нажатие на кнопку удалить");
            }
            event.preventDefault();
            var element = target;
            if (!target.is(jsPrefix + prefixClass + "account-select__delete")) {
                element = parents;
            }
            var url = element.attr("data-url");
            var method = element.attr("data-method");
            var data = element.attr("data-data");
            var popup = element.attr("data-popup");
            if (data && data.length > 0) {
                data = JSON.parse(data);
            } else {
                data = {};
            }
            if (popup && popup.length > 0) {
                popup = JSON.parse(popup);
            } else {
                popup = {
                    title: 'Are you sure?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                };
            }
            popup["width"] = "35rem";
            popup["padding"] = "3rem";
            swalWithBootstrapButtons(popup).then(function (result) {
                if (result.value) {
                    $.ajax(url, {
                        method: method,
                        data: data
                    }).then(function (data) {
                        if (data && data.success && data.success.length > 1 && data.title && data.title.length > 1) {
                            toastAlert(data);
                        } else {
                            if (debug) {
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

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */
/***/ (function(module, exports) {

/*!
* Clamp.js 0.5.1
*
* Copyright 2011-2013, Joseph Schmitt http://joe.sh
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*/
(function () {
  window.$clamp = function (c, d) {
    function s(a, b) {
      n.getComputedStyle || (n.getComputedStyle = function (a, b) {
        this.el = a;this.getPropertyValue = function (b) {
          var c = /(\-([a-z]){1})/g;"float" == b && (b = "styleFloat");c.test(b) && (b = b.replace(c, function (a, b, c) {
            return c.toUpperCase();
          }));return a.currentStyle && a.currentStyle[b] ? a.currentStyle[b] : null;
        };return this;
      });return n.getComputedStyle(a, null).getPropertyValue(b);
    }function t(a) {
      a = a || c.clientHeight;var b = u(c);return Math.max(Math.floor(a / b), 0);
    }function x(a) {
      return u(c) * a;
    }function u(a) {
      var b = s(a, "line-height");"normal" == b && (b = 1.2 * parseInt(s(a, "font-size")));return parseInt(b);
    }function l(a) {
      if (a.lastChild.children && 0 < a.lastChild.children.length) return l(Array.prototype.slice.call(a.children).pop());if (a.lastChild && a.lastChild.nodeValue && "" != a.lastChild.nodeValue && a.lastChild.nodeValue != b.truncationChar) return a.lastChild;a.lastChild.parentNode.removeChild(a.lastChild);return l(c);
    }function p(a, d) {
      if (d) {
        var e = a.nodeValue.replace(b.truncationChar, "");f || (h = 0 < k.length ? k.shift() : "", f = e.split(h));1 < f.length ? (q = f.pop(), r(a, f.join(h))) : f = null;m && (a.nodeValue = a.nodeValue.replace(b.truncationChar, ""), c.innerHTML = a.nodeValue + " " + m.innerHTML + b.truncationChar);if (f) {
          if (c.clientHeight <= d) if (0 <= k.length && "" != h) r(a, f.join(h) + h + q), f = null;else return c.innerHTML;
        } else "" == h && (r(a, ""), a = l(c), k = b.splitOnChars.slice(0), h = k[0], q = f = null);if (b.animate) setTimeout(function () {
          p(a, d);
        }, !0 === b.animate ? 10 : b.animate);else return p(a, d);
      }
    }function r(a, c) {
      a.nodeValue = c + b.truncationChar;
    }d = d || {};
    var n = window,
        b = { clamp: d.clamp || 2, useNativeClamp: "undefined" != typeof d.useNativeClamp ? d.useNativeClamp : !0, splitOnChars: d.splitOnChars || [".", "-", "\u2013", "\u2014", " "], animate: d.animate || !1, truncationChar: d.truncationChar || "\u2026", truncationHTML: d.truncationHTML },
        e = c.style,
        y = c.innerHTML,
        z = "undefined" != typeof c.style.webkitLineClamp,
        g = b.clamp,
        v = g.indexOf && (-1 < g.indexOf("px") || -1 < g.indexOf("em")),
        m;b.truncationHTML && (m = document.createElement("span"), m.innerHTML = b.truncationHTML);var k = b.splitOnChars.slice(0),
        h = k[0],
        f,
        q;"auto" == g ? g = t() : v && (g = t(parseInt(g)));var w;z && b.useNativeClamp ? (e.overflow = "hidden", e.textOverflow = "ellipsis", e.webkitBoxOrient = "vertical", e.display = "-webkit-box", e.webkitLineClamp = g, v && (e.height = b.clamp + "px")) : (e = x(g), e <= c.clientHeight && (w = p(l(c), e)));return { original: y, clamped: w };
  };
})();

/***/ })
/******/ ]);