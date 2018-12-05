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
                <div class="login-body" id="screen_reset">
                    <div class="login-title"><strong>Password Reset</strong></div>
                    <div class='register_form form-horizontal'>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control reset_input" id='reset_otp' placeholder="Enter your OTP"/>
							<span id='reset_msg1' style='color:red; display:none'> Please enter OTP</span>
							<span id='reset_msg2' style='color:red; display:none'> OTP must be 6 numbers</span>
							<span id='reset_msg3' style='color:red; display:none'> Invalid OTP</span>
                        </div>
						
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control reset_input" id='reset_password' placeholder="Password"/>
							<span id='reset_msg4' style='color:red; display:none'>Please enter a Password</span>
							<span id='reset_msg5' style='color:red; display:none'> Your password is not secure</span>
                        </div>
                    </div>
					 <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control reset_input" id='reset_confirm' placeholder="Confirm Password"/>
							<span id='reset_msg6' style='color:red; display:none'> Please re-enter your password</span>
							<span id='reset_msg7' style='color:red; display:none'> Passwords do not match</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                          
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" id='reset_submit'>Submit</button>
                        </div>
						</br>
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
		$(".reset_input").focus(function(){
			$("#reset_msg1").hide();
			$("#reset_msg2").hide();
			$("#reset_msg3").hide();
			$("#reset_msg4").hide();
			$("#reset_msg5").hide();
			$("#reset_msg6").hide();
			$("#reset_msg7").hide();
		});
		$("#reset_submit").click(function(){
			var reset_phone=window.localStorage.getItem("forgot_phn");
			var reset_otp = $("#reset_otp").val();
			var reset_password = $("#reset_password").val();
			var reset_confirm = $("#reset_confirm").val();
			if(reset_otp==''){$("#reset_msg1").show();}
			else if(reset_otp.length!=6){$("#reset_msg2").show();}
			else if(reset_password==""){$("#reset_msg4").show();}
			else if(reset_password.length<6){$("#reset_msg5").show();}
			else if(reset_confirm==""){$("#reset_msg6").show();}
			else if(reset_confirm!=reset_password){$("#reset_msg7").show();}
			else{			 
			$.ajax({
			  url:"api/login_api.php",
			  data:"action=reset_password&forgot_phone="+reset_phone+"&forgot_otp="+reset_otp+"&forgot_password="+reset_password,
			  method:"POST",
			  dataType:"json"
					}).done(function(data){
						if(data.status=='failure'){
							$("#reset_msg3").show();
						}
						else{
							window.location = "login.php";
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






