function login_form_validate(){
	var email = document.forms["login_form1"]["login_email"].value;
    
    if(email == ''){
        $("#login_alert").slideDown();
        setTimeout(function(){ $("#login_alert").slideUp(); }, 2000);
        return false;
    }

    $.ajax({
		type: "post",
		url: "http://localhost/project/Login.php",
		data: {email,},
		dataType: "html",
		cache: false,
		success: function(data)	{
			var data = $.parseJSON(data);
			var status = data.status;
			var pic = data.pic;

			if(status == 1){
				$("#login_form1").hide("slide");
    			$("#login_form2").fadeIn("slide");
    			$("#dp2").attr('src', "pictures/"+pic);
    		}
    		else{
    			document.getElementById('login_alert').innerHTML = "Please check your email!";
    		 	$("#login_alert").slideDown();
        		setTimeout(function(){ $("#login_alert").slideUp(); }, 2000);
        	}
		},
		error: function(){
        	alert("Something went wrong!");
    	}
	});
	return false;
}

function login_form_validate2(){
	var email = document.forms["login_form1"]["login_email"].value;
	var pswrd = document.forms["login_form2"]["login_password"].value;
    
    if(pswrd == ''){
        $("#login_alert").slideDown();
        setTimeout(function(){ $("#login_alert").slideUp(); }, 2000);
        return false;
    }

    $.ajax({
		type: "post",
		url: "http://localhost/project/Login2.php",
		data: {email,pswrd},
		dataType: "html",
		cache: false,
		success: function(data)	{
			var data = $.parseJSON(data);
			var status = data.status;

			if(status == 1){
				window.location.href = 'Success.php';
    		}
    		else{
    			document.getElementById('login_alert').innerHTML = "Incorrect Password!";
    		 	$("#login_alert").slideDown();
        		setTimeout(function(){ $("#login_alert").slideUp(); }, 2000);
        	}
		},
		error: function(){
        	alert("Something went wrong!");
    	}
	});

	return false;
}