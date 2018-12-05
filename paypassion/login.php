<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Paypassion | Register as a gigster</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <center><h2 style='font-weight:bold; color:#ffffff;'>Paypassion</h2></center>
                <div class="login-body" id="screen_login">
                    <div class="login-title"><strong>Login</strong></div>
                    <div class='register_form form-horizontal'>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control login_input" id='login_phone' placeholder="Phone"/>
							<span id='login_msg1' style='color:red; display:none'> Please enter your Mobile Number</span>
							<span id='login_msg2' style='color:red; display:none'> Enter a valid 10 Digit Mobile Number</span>
							
                        </div>
                    </div>
					 <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control login_input" id='login_password' placeholder="Password"/>
							<span id='login_msg3' style='color:red; display:none'>Please Enter your Password</span>
							<span id='login_msg4' style='color:red; display:none'>Your Credentials do not match</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                          
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" id='login_submit'>Login</button>
                        </div>
						</br>
						<center><p style='padding-top:20px; float:right;'><a href='forgot_password.php'>Forgot Password</a></p></center>
                    </div>
                    <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Start as a Gigster <a href="register.php">Register</a>
                    </div>
                    </div>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                       Powered by CrazyCodez
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
         <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		$(".login_input").focus(function(){
			$("#login_msg1").hide();
			$("#login_msg2").hide();
			$("#login_msg3").hide();
			$("#login_msg4").hide();
		});
		$("#login_submit").click(function(){
			var login_phone = $("#login_phone").val();
			var login_password = $("#login_password").val();
			if(login_phone==''){$("#login_msg1").show();}
			else if(login_phone.length!=10){$("#login_msg2").show();}
			else if(login_password == ''){$("#login_msg3").show();}
			else{			 
			$.ajax({
			  url:"api/login_api.php",
			  data:"action=login&login_phone="+login_phone+"&login_password="+login_password,
			  method:"POST",
			  dataType:"json"
					}).done(function(data){
						if(data.status=='failure'){
							$("#login_msg4").show();
						}
						else{
							window.localStorage.setItem("reg_phone",data.response.view_phone);
							window.location = "profile.php";
						}
				  }); }
		});
		})
		</script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
		
    </body>
</html>






