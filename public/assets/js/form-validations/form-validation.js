
var input;
var count = 0;
$("[data-val]").on('blur', function (){
    input=$(this).data('val');
    validateForm($(this),input);
    if(validateForm($(this),input) == false){
        count += 1;
    }
});

function allFieldsValid($form) {
    $form.find('input, select, textarea').each(function () {
        $(this).trigger('blur').trigger('change');
    });
    if(count > 0) {
        count = 0;
        return false;
    }else{
        return true;
    }
}

// Global function to check form errors
function validateForm(event,input){
    var name = event.val();
    var errorlabel = event.closest('.form-validation-group').find('.label-error-message span');
    var label = event.closest('.form-validation-group').find('.form-labels');
    var validationResult = checkInputErrors(name,input);
    if(validationResult.status == true){
        errorlabel.addClass('d-none');
        label.removeClass('vd-err-color');
        event.removeClass('form-error');
        return true;
    }else{
        errorlabel.removeClass('d-none');
        label.addClass('vd-err-color');
        event.addClass('form-error');
        errorlabel.html('<i class="bi bi-exclamation-circle-fill"></i>')
        errorlabel.append(validationResult.message);
        return false;
    }
    
}


// To check alphabets
function checkInputErrors(value,input){
    if(input === 'user_name'){
        if(value === ''){
            return { status: false, message: "This field can't be empty!" };
        }else if (!value.match(/^[a-zA-Z0-9_]+$/)){
            return { status: false, message: "Please enter username" };
        }else{
            return { status: true, message: "" };
        }
    }

    if(input === 'alphabets'){
        if(value === ''){
            return { status: false, message: "This field can't be empty!" };
        }else if (!value.match(/^[a-zA-Z][a-zA-Z\s]*$/)){
            return { status: false, message: "Please enter valid name" };
        }else{
            return { status: true, message: "" };
        }
    }

    if(input === 'email'){
        if(value === ''){
            return { status: false, message: "This field can't be empty!" };
        }else if (!value.match(/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
            return { status: false, message: "Please enter valid email address" };
        }else{
            return { status: true, message: "" };
        }
    }

    if(input === 'checkMobile'){
        if(value === ''){
            return { status: false, message: "This field can't be empty!" };
        }else if (!value.match(/^[6-9]\d{9}$/)){
            return { status: false, message: "Please enter valid mobile number" };
        }else{
            return { status: true, message: "" };
        }
    }

    if (input === 'password') {
        if (value === '') {
            return { status: false, message: "This field can't be empty!" };
        } else if (!value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/)) {
            return { 
                status: false, 
                message: "Use at least 8 characters with uppercase, lowercase, number, and symbol." 
            };
        } else {
            return { status: true, message: "" };
        }
    }

    if(input === 'notempty'){
        if(value === ''){
            return { status: false, message: "Please select a role!" };
        }else {
            return { status: true, message: "" };
        }
    }
}



