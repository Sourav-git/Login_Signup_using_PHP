function login_form_validate(){
    if(document.forms["login_form"]["login_email"].value == ''){
        $("#login_alert").slideDown();
        setTimeout(function(){ $("#login_alert").slideUp(); }, 2000);
        return false;
    }

    $("#login_email").hide("slide");
    $("#login_password").fadeIn("slide");

    alert("ok");
return false;
}