<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/social_icons.css">
    <style type="text/css">
        button{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>

    <!-- Registration Panel -->

    <div class="container" style="margin-top:2%; display: none;" id = "reg_div">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style = "padding : 30px; border : 1px solid rgba(0, 0, 0, 0.15); border-radius: 7px 7px 7px 7px"> 
                <form role="form" action = "Register.php" method="POST" name = "reg_form" onsubmit="return reg_form_validate()" autocomplete="off" enctype="multipart/form-data">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Registration</strong></h3>
                    <div class="ball" style = "padding : 10px; border : 1px solid rgba(0, 0, 0, 0.15); border-radius: 7px 7px 7px 7px">
                        <div class="user-photo-mask">
                            <img id = "dp" src="https://cdn1.iconfinder.com/data/icons/avatars-1/90/10-512.png" height = "200px" width = "200px" style = "border-radius: 50%; margin-bottom: 2%">
                        </div>
                        <input type="file" name = "p_pic" id = "file_btn" tabindex="8" hidden>
                        <button class="btn btn-success" onClick="$('#file_btn').click();">Upload Picture</button>
                    </div>
                </div>
                <br>

                <div id = "reg_alert" class="alert alert-danger" style="display: none">Fill all the (*) marked fields!</div>
                <div class="panel-body"> 
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name*" autocomplete="off" tabindex="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" autocomplete="off" tabindex="2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name*" autocomplete="off" tabindex="3">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control " placeholder="Email Address*" autocomplete="off" tabindex="4">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control " placeholder="Password*" autocomplete="off" tabindex="5">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Confirm Password*" autocomplete="off" tabindex="6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" id="tel" class="form-control " placeholder="Phone no.*" autocomplete="off" tabindex="7">
                        </div>
                        <button type="submit" class="btn btn-success">Sign Up</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                        <hr style="margin-top:10px;margin-bottom:10px;" >
                        <div class="form-group">
                           <div style="font-size:85%">
                                Already have an account? 
                                <a href="#" onClick="$('#reg_div').hide(); $('#login_div').fadeIn();">login Here</a>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login Panel -->

    <div class="container" style="margin-top:2%;" id = "login_div">
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default" style = "padding : 30px; border : 1px solid rgba(0, 0, 0, 0.15); border-radius: 7px 7px 7px 7px"> 
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Login</strong></h3>
                    <div class="ball" style = "padding : 10px; border : 1px solid rgba(0, 0, 0, 0.15); border-radius: 7px 7px 7px 7px">
                        <div class="user-photo-mask">
                            <img id = "dp2" src="https://cdn1.iconfinder.com/data/icons/avatars-1/90/10-512.png" height = "200px" width = "200px" style = "border-radius: 50%; margin-bottom: 2%">
                        </div>
                    </div>
                </div>
                <br>
                <div id = "login_alert" class="alert alert-danger" style="display: none">Fill all the (*) marked fields!</div>
                <div class="panel-body">
                    <form role="form" method="POST" id = "login_form1" name = "login_form1" onsubmit="return login_form_validate()" autocomplete="off">
                        <div class="form-group">
                            <input type="email" name="login_email" id="login_email" class="form-control " placeholder="Email Address*" tabindex="1">
                        </div>
                        <button class="btn btn-success">Sign in</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </form>
                    <form role="form" method="POST" id = "login_form2" name = "login_form2" onsubmit="return login_form_validate2()" autocomplete="off" style = "display:none">
                        <div class="form-group">
                            <input type="password" name="login_password" id="login_password" class="form-control " placeholder="Password*" tabindex="1">
                        </div>
                        <button class="btn btn-success">Sign in</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                    </form>
                        <hr style="margin-top:10px;margin-bottom:10px;" >
                        <div class="form-group">
                            <div style="font-size:85%">
                                Don't have an account! 
                                <a href="#" onClick="$('#login_div').hide(); $('#reg_div').fadeIn()">Register Here</a>
                            </div>
                            <b>OR</b>
                            <div style="font-size:85%">
                                Login using social account
                                <p>
                                    <a onclick = "login()" class="btn btn-primary social-login-btn social-facebook" href=""><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-primary social-login-btn social-twitter" href="/auth/twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-primary social-login-btn social-linkedin" href="/auth/linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a class="btn btn-primary social-login-btn social-google" href="/auth/google"><i class="fa fa-google-plus"></i></a>
                                </p>
                                <!-- <div id="status"></div>
                                <button onclick="getInfo()">Get Info</button>
                                <button onclick="login()">login</button>
                                <button onclick="logout()">logout</button> -->
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <footer>
    <p>
        <small>&copy; Sourav Sarkar 2017</small>
    </p>
    </footer>
    </center>
</body>
</script><script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src = "assets/js/login_panel.js"></script>
<script type="text/javascript" src = "assets/js/reg_panel.js"></script>
</script><script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</script><script type="text/javascript" src="assets/js/fb_api.js"></script>
</script><script type="text/javascript" src="assets/js/upload_pic.js"></script>
</html>