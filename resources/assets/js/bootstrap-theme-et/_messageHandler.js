window.messageHandler = function (data) {
    let toastAlert = swal.mixin({
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