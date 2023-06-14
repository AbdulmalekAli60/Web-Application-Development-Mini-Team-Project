// validation for sign up

var username = document.getElementById("username");
var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastName");
var Email = document.getElementById("Email");
var Phone = document.getElementById("phone");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirm-password");

function Validation() {
    
    if (isEmpty(username, "UserName should not be empty", "username-alert")) {

        if (inputLength(username, 4, "User Name should be mor then 3", "username-alert")) {

            if (isEmpty(firstname, "First Name should not be empty", "firstName-alert")) {

                if (isEmpty(lastname, "Last name should not be empty", "lastName-alert")) {

                    if (isEmpty(Email, "Email should not be empty", "Email-alert")) {

                        if (isEmpty(Phone, "Phone Number should not be empty", "phone-alert")) {

                            if (isNumeric(Phone, "Please Enter Numbers Only", "phone-alert")) {

                                if (isEmpty(password, "Please Enter Password", "password-alert")) {
                                            
                                    if (inputLength(password, 4, "The password must be more than 4", "password-alert")) {
                                        
                                }
                            }
                        }
                    }
                }
            }

        }
    }
}
    return false;
  
}

function isEmpty(input, msg, span) {
    if (input.value.trim().length == 0) {
        input.style.border = "3px solid #df2c2c";
        document.getElementById(span).innerHTML = " " + "(" + msg + ")";
        return false;
    }
    input.style.border = "1px solid #cbcbcb";
    document.getElementById(span).innerHTML = " ";
    return true;
}


function inputLength(input, min, msg, span) {
    if (input.value.length <= min) {
        input.style.border = "3px solid #df2c2c";
        document.getElementById(span).innerHTML = " " + "(" + msg + ")";
        return false;
    }
    input.style.border = "1px solid #cbcbcb";
    document.getElementById(span).innerHTML = " ";
    return true;
}


function isAlphabet(input, msg, span) {
    var expression = /^[a-zA-Z]+$/; 
    if (input.value.match(expression)) {
        input.style.border = "1px solid #cbcbcb";
        return true;
    } else {
        input.style.border = "3px solid #df2c2c";
        document.getElementById(span).innerHTML = " " + "(" + msg + ")";
        return false;
    }
}

function isNumeric(input, msg, span) {
    var expression = /^[0-9]+$/; 
    if (input.value.match(expression)) {
        input.style.border = "1px solid #cbcbcb";
        return true;
    } else {
        input.style.border = "3px solid #df2c2c";
        document.getElementById(span).innerHTML = " " + "(" + msg + ")";
        return false;
    }
}

