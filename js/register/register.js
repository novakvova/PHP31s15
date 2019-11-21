$(function () {
    $("#form_register input[type=email]").on('input', function () {
        var child = $(this);
        var value = child.val();
        if (validateEmail(value)) {
            hideErrorInput(child);
        } else {
            showErrorInput(child);
        }
    });

    $("#form_register input[type=password]").on('input', function () {
        var child = $(this);
        var value = child.val();
        $invalidPass = $("#invalid-pass");
        if (validatePassword(value)) {
            hideErrorInput(child);
            $invalidPass.removeClass("d-block");
            $invalidPass.addClass("d-none");
        } else {
            $invalidPass.removeClass("d-none");
            $invalidPass.addClass("d-block");
            showErrorInput(child);
        }
    });

    $('#form_register #image').on('input', function () {
        //valid_hide($(this));
        readURL(this);
    });


    function hideErrorInput(child)
    {
        child.removeClass("is-invalid");
        var message = child.parent().find('.invalid-feedback')[0];
        if(message!==undefined)
            message.remove();
    }
    function showErrorInput(child)
    {
        child.addClass("is-invalid");
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function validatePassword(pass) {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{6,24}$/;
        return re.test(String(pass));
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            //$(this).parent().append("<img src='"+e.target.result+"'/>");
            $('#prev').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}