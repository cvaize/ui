
/**
 * EBS
 */

// require('selectric'); // http://selectric.js.org/


window.toastAlert = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

require('./_form-controls');

require('./_navbar');

//Modules
require('./modules/account-select/account-select');