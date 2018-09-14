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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = {
  error: {
    length: 'Length should be a valid positive number',
    password: 'Password should be a valid string'
  },
  regex: {
    digits: /\d+/,
    letters: /[a-zA-Z]+/,
    uppercase: /[A-Z]+/,
    lowercase: /[a-z]+/,
    symbols: /[`~\!@#\$%\^\&\*\(\)\-_\=\+\[\{\}\]\\\|;:'",<.>\/\?€£¥₹]+/,
    spaces: /[\s]+/
  }
};


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
__webpack_require__(10);
module.exports = __webpack_require__(11);


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * EBS
 */

// require('selectric'); // http://selectric.js.org/

__webpack_require__(3);
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

__webpack_require__(18);
__webpack_require__(4);

__webpack_require__(7);

//Modules
__webpack_require__(8);
__webpack_require__(9);

/***/ }),
/* 3 */
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

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

//https://www.npmjs.com/package/password-validator
var passwordValidator = __webpack_require__(5);

(function ($, passwordValidator) {

    var createValidation = function createValidation(th, data) {
        // Create a schema
        var schema = new passwordValidator();
        if (data.min && data.min.value) {
            schema = schema.is().min(data.min.value);
        }
        if (data.max && data.max.value) {
            schema = schema.is().max(data.min.value);
        }
        if (data.uppercase) {
            schema = schema.has().uppercase();
        }
        if (data.lowercase) {
            schema = schema.has().lowercase();
        }
        if (data.digits) {
            schema = schema.has().digits();
        }
        if (data.spaces) {
            schema = schema.has().not().spaces();
        }
        var element = $(th);
        var mark = function mark(list) {
            var invalidFeedback = element.parents(".js-form-group").find(".js-invalid-feedback");
            if (!invalidFeedback[0]) {
                return;
            }
            var rectangles = invalidFeedback.find(".js-invalid-feedback__rectangles");
            var dataShow = 0;
            Object.keys(data).forEach(function (elem) {
                if (data[elem].show) {
                    dataShow += 1;
                }
            });
            var clearedList = [];
            list.forEach(function (elem, index) {
                if (data[elem] && data[elem].show) {
                    clearedList.push(elem);
                }
            });
            dataShow -= clearedList.length;
            rectangles.each(function () {
                $(this).removeClass("active");
            });
            for (var i = 0; i < dataShow; i++) {
                $(rectangles[i]).addClass("active");
            }
            if (clearedList[0] && data[clearedList[0]] && data[clearedList[0]].text) {
                invalidFeedback.find(".js-invalid-feedback__text").html(data[clearedList[0]].text);
            }
            if (rectangles.length === dataShow) {
                $(th).parents(".js-form-group").removeClass("is-invalid");
            } else {
                $(th).parents(".js-form-group").addClass("is-invalid");
            }
        };
        element.on("input", function () {
            var val = $(this).val();
            mark(schema.validate(val, { list: true }));
        });
    };

    $(".js-validator").each(function () {
        var validatorData = $(this).attr("data-validator");
        if (validatorData && validatorData.length > 4) {
            validatorData = JSON.parse(validatorData);
            createValidation(this, validatorData);
        }
    });

    $(document).on("click", function (event) {
        var target = $(event.target);

        //Start - Присваиваем фокус на группу input
        if (target.is(".js-form-group")) {
            target.addClass("active");
            $(".js-form-group").each(function () {
                if (event.target !== this) {
                    $(this).removeClass("active");
                }
            });
        }
        var formGroup = target.parents(".js-form-group");
        if (formGroup.length > 0) {
            formGroup.addClass("active");
            $(".js-form-group").each(function () {
                if (formGroup.get(0) !== this) {
                    $(this).removeClass("active");
                }
            });
        }
        if (!target.is(".js-form-group") && formGroup.length === 0) {
            $(".js-form-group.active").removeClass("active");
        }
        //End
    });

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

    $('.js-selectric').selectric({
        labelBuilder: function labelBuilder(currItem) {
            var icon = currItem.element.parents(".js-selectric").attr("data-icon");
            return (icon && icon.length > 4 ? icon : '') + currItem.text;
        }
    });
})($, passwordValidator);

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

var lib = __webpack_require__(6);
var error = __webpack_require__(0).error;

/**
 * Validates that a number is a valid length (positive number)
 *
 * @private
 * @param {number} num - Number to validate
 */
function _validateLength(num) {
  if (!num || typeof num !== 'number' || num < 0) {
    throw new Error(error.length);
  }
}

/**
 * Tests a validation and return the result
 *
 * @private
 * @param {string} property - Property to validate
 * @return {boolean} Boolean value indicting the validity
 *           of the password against the property
 */
function _isPasswordValidFor(property) {
  return lib[property.method].apply(this, property.arguments);
}

/**
 * Registers the properties of a password-validation schema object
 *
 * @private
 * @param {string} func - Property name
 * @param {array} args - arguments for the func property
 */
function _register(func, args) {
  // Add property to the schema
  this.properties.push({ method: func, arguments: args });
  return this;
}

/**
 * Creates a password-validator schema
 *
 * @constructor
 */
function PasswordValidator() {
  // Initialize a schema with no properties defined
  this.properties = [];
}

/**
 * Method to validate the password against schema
 *
 * @param {string} pwd - password to valdiate
 * @param {object} options - optional options to configure validation
 * @param {boolean} [options.list] - asks for a list of validation
 *           failures instead of just true/false
 * @return {boolean|array} Boolean value indicting the validity
 *           of the password as per schema, if 'options.list'
 *           is not set. Otherwise, it returns an array of
 *           property names which failed validations
 */
PasswordValidator.prototype.validate = function (pwd, options) {
  // Checks if pwd is invalid
  if (typeof pwd !== 'string') {
    throw new Error(error.password);
  }

  // Sets password string
  this.password = pwd;

  // Sets that no inversion takes place by default
  this.positive = true;

  var _this = this;

  if (options && options.list === true) {
    return this.properties.reduce(function (errorList, property) {
      // Applies all validations defined in lib one by one
      if (!_isPasswordValidFor.call(_this, property)) {
        // If the validation for a property fails,
        // add it to the error list
        return errorList.concat(property.method);
      }
      return errorList;
    }, []);
  }

  // Returns the result of the validations
  return this.properties.every(function (property) {
    // Applies all validations defined in lib one by one
    return _isPasswordValidFor.call(_this, property);
  });
};

/**
 * Rule to invert the next applied rules.
 * All the rules applied after 'not' will have opposite effect,
 * until 'has' rule is applied
 */
PasswordValidator.prototype.not = function not() {
  return _register.call(this, 'not', arguments);
};

/**
 * Rule to invert the effects of 'not'
 * Apart from that, 'has' is also used
 * to make the api readable and chainable
 */
PasswordValidator.prototype.has = function has() {
  return _register.call(this, 'has', arguments);
};

/**
 * Rule to invert the effects of 'not'
 * Apart from that, 'is' is also used
 * to make the api readable and chainable
 */
PasswordValidator.prototype.is = function is() {
  return _register.call(this, 'is', arguments);
};

/**
 * Rule to specify a minimum length of the password
 *
 * @param {number} num - minimum length
 */
PasswordValidator.prototype.min = function min(num) {
  _validateLength(num);
  return _register.call(this, 'min', arguments);
};

/**
 * Rule to specify a maximum length of the password
 *
 * @param {number} num - maximum length
 */
PasswordValidator.prototype.max = function max(num) {
  _validateLength(num);
  return _register.call(this, 'max', arguments);
};

/**
 * Rule to mendate the presense of digits in the password
 */
PasswordValidator.prototype.digits = function digits() {
  return _register.call(this, 'digits', arguments);
};

/**
 * Rule to mendate the presense of letters in the password
 */
PasswordValidator.prototype.letters = function letters() {
  return _register.call(this, 'letters', arguments);
};

/**
 * Rule to mendate the presense of uppercase letters in the password
 */
PasswordValidator.prototype.uppercase = function uppercase() {
  return _register.call(this, 'uppercase', arguments);
};

/**
 * Rule to mendate the presense of lowercase letters in the password
 */
PasswordValidator.prototype.lowercase = function lowercase() {
  return _register.call(this, 'lowercase', arguments);
};

/**
 * Rule to mendate the presense of symbols in the password
 */
PasswordValidator.prototype.symbols = function symbols() {
  return _register.call(this, 'symbols', arguments);
};

/**
 * Rule to mendate the presense of space in the password
 * It can be used along with 'not' to not allow spaces
 * in the password
 */
PasswordValidator.prototype.spaces = function spaces() {
  return _register.call(this, 'spaces', arguments);
};

/**
 * Rule to whitelist words to be used as password
 *
 * @param {array} list - list of values allowed
 */
PasswordValidator.prototype.oneOf = function oneOf() {
  return _register.call(this, 'oneOf', arguments);
};

module.exports = PasswordValidator;


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

/**
 * Generic method to test regex
 *
 * @private
 * @param {string} regex - regex to test
 *                           with password
 */
var regex = __webpack_require__(0).regex;

function _process(regexp) {
  return new RegExp(regexp).test(this.password) === this.positive;
}

module.exports = {

  /**
   * Method to invert the next validations
   *
   * @param {RegExp} [symbol] - custom Regex which should not be present
   */
  not: function not(symbol) {
    this.positive = false;
    if (symbol) {
      return _process.call(this, symbol);
    }
    return true;
  },

  /**
   * Method to invert the effects of not()
   *
   * @param {RegExp} [symbol] - custom Regex which should be present
   */
  has: function has(symbol) {
    this.positive = true;
    if (symbol) {
      return _process.call(this, symbol);
    }
    return true;
  },

  /**
   * Method to invert the effects of not() and
   * to make the api readable and chainable
   *
   */
  is: function is() {
    this.positive = true;
    return true;
  },

  /**
   * Method to specify a minimum length
   *
   * @param {number} num - minimum length
   */
  min: function min(num) {
    return this.password.length >= num;
  },

  /**
   * Method to specify a maximum length
   *
   * @param {number} num - maximum length
   */
  max: function max(num) {
    return this.password.length <= num;
  },

  /**
   * Method to validate the presense of digits
   */
  digits: function digits() {
    return _process.call(this, regex.digits);
  },

  /**
   * Method to validate the presense of letters
   */
  letters: function letters() {
    return _process.call(this, regex.letters);
  },

  /**
   * Method to validate the presense of uppercase letters
   */
  uppercase: function uppercase() {
    return _process.call(this, regex.uppercase);
  },

  /**
   * Method to validate the presense of lowercase letters
   */
  lowercase: function lowercase() {
    return _process.call(this, regex.lowercase);
  },

  /**
   * Method to validate the presense of symbols
   */
  symbols: function symbols() {
    return _process.call(this, regex.symbols);
  },

  /**
   * Method to validate the presense of space
   */
  spaces: function spaces() {
    return _process.call(this, regex.spaces);
  },

  /**
   * Method to provide pre-defined values for password
   *
   * @param {array} list - list of values allowed
   */
  oneOf: function oneOf(list) {
    return list.indexOf(this.password) >= 0 === this.positive;
  }
};


/***/ }),
/* 7 */
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
/* 8 */
/***/ (function(module, exports) {


(function ($, swal) {
    var prefixClass = "module__";
    var jsPrefix = ".js-";
    var debug = true;
    if (debug && !swal) {
        console.log("Подключите SweetAlert2");
    }

    var setupPopupElement = $(".js-account-select-popup-delete");
    var setupPopup = setupPopupElement.attr("data-setup-popup");
    if (setupPopup.length > 4) {
        setupPopup = JSON.parse(setupPopup);
        setupPopup.html = setupPopupElement.html();
    } else {
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
            padding: "3rem"
        };
    }

    if (setupPopup.imageUrl) {
        $.ajax(setupPopup.imageUrl, { cache: true });
    }

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
    var popupShow = false; // Сделано чтобы не скрывать список при работе с окнами
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

        if (!popupShow) {
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
        }

        // Нажатие на кнопку удалить
        var parents = target.parents(jsPrefix + prefixClass + "account-select__delete");
        if (target.is(jsPrefix + prefixClass + "account-select__delete") || parents.length > 0) {

            if (debug) {
                console.log("Нажатие на кнопку удалить");
            }
            popupShow = true;
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
                popup = setupPopup;
            }
            swal(popup).then(function (result) {
                if (result.value) {
                    $.ajax(url, {
                        method: method,
                        data: data
                    }).then(function (data) {
                        if (data && data.type && data.type === 'success') {
                            if (data.redirect) {
                                var href = "/";
                                if (data.redirect.length) {
                                    href = data.redirect;
                                }
                                document.location.href = href;
                            } else {
                                var elementDelete = element.parents(jsPrefix + prefixClass + "account-select__item");
                                var index = elementDelete.find(jsPrefix + prefixClass + "account-select__content").attr("data-index");
                                if (index) {
                                    $(jsPrefix + prefixClass + "account-select__content[data-index='" + index + "']").remove();
                                }
                                elementDelete.remove();
                                var _content = $(jsPrefix + prefixClass + "account-select__content").get(0);
                                if (_content) {
                                    selectOption($(_content));
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

/***/ }),
/* 9 */
/***/ (function(module, exports) {

(function ($, ClipboardJS) {
    $(document).on("click", function (event) {

        var target = $(event.target);

        if (target.is(".js-tag__close")) {
            event.preventDefault();
            var tag = target.parents(".js-tag");
            if (tag && tag.length) {
                tag.remove();
            }
            return;
        }

        if (target.parents(".js-data-select-copy").length) {
            if (target.is("[data-select-copy]")) {
                event.preventDefault();
                var selectCopy = target.attr("data-select-copy");
                target.clone().appendTo(selectCopy);
                console.log(target);
                return;
            }
        }
    });
    new ClipboardJS('.js-selectorWord__copy-words', {
        text: function text(trigger) {
            var inputs = $(".js-selectorWord").find(".selectorWord__item input");
            var str = "";
            inputs.each(function () {
                str += $(this).val() + " ";
            });
            return str;
        }
    });
})($, ClipboardJS);

/***/ }),
/* 10 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 11 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */
/***/ (function(module, exports) {

window.messageHandler = function (data) {
    var toastAlert = swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    // toastAlert({
    //     type: 'success',
    //     title: 'Debug message'
    // });
};

/***/ })
/******/ ]);