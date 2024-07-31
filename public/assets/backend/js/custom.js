document.addEventListener('livewire:navigated', (event) => {

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

});


document.addEventListener('livewire:init', () => {
    Livewire.on('alert', (event) => {
        toastr[event[0].type](event[0].message,
            event[0].title ?? '')
    });
});

