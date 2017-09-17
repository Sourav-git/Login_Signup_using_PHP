window.fbAsyncInit = function() {
    FB.init({
        appId      : '415847648816764',
        xfbml      : true,
        version    : 'v2.8'
    });
    FB.getLoginStatus(function(response){
        if(response.status === 'connected'){
            document.getElementById('status').innerHTML = 'we are connected';
        } else if(response.status === 'not_authorized') {
                 document.getElementById('status').innerHTML = 'we are not logged in.'
        } else {
                document.getElementById('status').innerHTML = 'you are not logged in to Facebook';
        }
    });
    // FB.AppEvents.logPageView();
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// login
function login(){
    FB.login(function(response){
        if(response.status === 'connected'){
            document.getElementById('status').innerHTML = 'we are connected';
        } else if(response.status === 'not_authorized') {
             document.getElementById('status').innerHTML = 'we are not logged in.'
        } else {
            document.getElementById('status').innerHTML = 'you are not logged in to Facebook';
        }
    });
}

// get user basic info
function getInfo() {
    FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email,gender,cover'}, function(response) {
        alert("Name - "+response.name+"\nEmail - "+response.email+"\nGender - "+response.gender);
        console.log(response.cover);
    });
}

// logout
function logout(){
    FB.logout(function(response) {
        document.location.reload();
    });
}