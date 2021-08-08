$('#change_password_form').validate({
    ignore: '.ignore',
    errorClass: 'invalid',
    validClass: 'success',
    rules: {
        old_password: {
            required: true,
            minlength: 6,
            maxlength: 100
        },
        new_password: {
            required: true,
            minlength: 6,
            maxlength: 100
        },
        confirm_password: {
            required: true,
            equalTo: '#new_password'
        },
    },
    messages: {
        old_password: {
            required: "Digite sua senha antiga"
        },
        new_password: {
            required: "Digite sua nova senha"
        },
        confirm_password: {
            required: "Precisa confirmar sua nova senha"
        },

    },
    submitHandler: function (form) {
        $.LoadingOverlay("show");
        form.submit();
    }

});