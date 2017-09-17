function reg_form_validate(){

    //var picName = document.forms["reg_form"]["p_pic"].value;
    var firstName = document.forms["reg_form"]["first_name"].value;
    //var midName = document.forms["reg_form"]["middle_name"].value;
    var lastName = document.forms["reg_form"]["last_name"].value;
    var email = document.forms["reg_form"]["email"].value;
    var pswrd = document.forms["reg_form"]["password"].value;
    var pswrd2 = document.forms["reg_form"]["password_confirmation"].value;
    var phone = document.forms["reg_form"]["phone"].value;
    
    if(firstName == '' || lastName == '' || email == '' || pswrd == '' || pswrd2 == '' || phone == ''){   
        $("#reg_alert").slideDown();
        setTimeout(function(){ $("#reg_alert").slideUp(); }, 2000);
        return false;
    }

    if(document.forms["reg_form"]["password"].value != document.forms["reg_form"]["password_confirmation"].value){
        document.getElementById('reg_alert').innerHTML = "Password doesn't match!";
        $("#reg_alert").slideDown();
        setTimeout(function(){ $("#reg_alert").slideUp(); }, 2000);
        return false;
    }
    return true;
}