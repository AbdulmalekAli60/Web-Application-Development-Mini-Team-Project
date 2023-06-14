
var Email = document.getElementById("Email");
var password = document.getElementById("password");

function Validation(){
    if(checkIfIsEmpty(Email,"الرجاء ادخال البريد الالكتروني" ,"Email-alert")){

        if(checkIfIsEmpty(password,"الرجاء ادخال الرقم السري" , "pass-alert")){
            
            if(inputLength(password,4,"الرقم السري يجب ان يتكون من 4 خانات او اكثر" , "pass-alert")){
                
            }
        }
        
    }
    return false;
}




function checkIfIsEmpty(input ,msg , span ) {
    if (input.value.trim().length == 0) {
        input.style.border = "3px solid #df2c2c";
        document.getElementById(span).innerHTML = " " + "(" + msg + ")";
        return false;
    }
    input.style.border = "1px solid #cbcbcb";
    document.getElementById(span).innerHTML = "";

    return true;
}

function inputLength(input, min, msg ,span) {
    if (input.value.length <= min) {
        input.style.border = "3px solid #ff0000";
        document.getElementById(span).innerHTML  = " " + "(" + msg + ")";

        return false;
    }
    input.style.border = "1px solid #cbcbcb";
    document.getElementById(span).innerHTML  = "";
    return true;
}


