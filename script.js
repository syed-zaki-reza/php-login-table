
function clearErrors() {

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm() {

    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['regForm']["fname"].value;
    if (name[0] != name[0].toUpperCase()){
        seterror("name", "*First charecter of Name is not capital letter!");
        returnval = false;
    }

    if (name.length == 0){
        seterror("name", "*Length of Name cannot be zero!");
        returnval = false;
    }

    var email = document.forms['regForm']["femail"].value;
    if (email.length>50){
        seterror("email", "*Email length is too long!");
        returnval = false;
    }

    var patternEmail = /^[^ ]+@[^ ]+\.com$/gi;
    if (!email.match(patternEmail)){
        seterror("email", "*Structure of Email is not satisfactory!");
        returnval = false;
    }

    var phone = document.forms['regForm']["fphone"].value;
    var patternPhone = /\+88[0-9]+$/gi;
    if (!phone.match(patternPhone)){
        seterror("phone", "*Phone number should be of 13 digits with '+' infront!");
        returnval = false;
    }

    var address = document.forms['regForm']["faddress"].value;
    if (address.length < 2){
        seterror("address", "*Address is invalid!");
        returnval = false;
    }

    return returnval;
}