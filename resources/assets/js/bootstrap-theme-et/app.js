
/**
 * EBS
 */

// require('selectric'); // http://selectric.js.org/

require('../../libs/Clamp/clamp.min');
//https://github.com/josephschmitt/Clamp.js
$(".js-clamp-2-lines").each(function () {
    $clamp(this, {clamp: 2});
});
$(function () {//https://atomiks.github.io/tippyjs/
    tippy('[data-toggle="tooltip"]', {
        delay: 0,
        arrow: true,
        arrowType: 'round',
        size: 'large',
        duration: 300,
        animation: 'shift-toward'
    });
});


require('./_messageHandler');
require('./_form-controls');

require('./_navbar');

//Modules
require('./modules/account-select/account-select');
require('./modules/selectorWord/selectorWord');
