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
                <div class="login-body" id="screen_forgotpassword">
                    <div class="login-title">Enter your registered Phone number</div>
                    <div class='register_form form-horizontal'>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control forgot_input" id='forgot_phone' placeholder="Enter mobile number"/>
							<span id='forgot_msg1' style='color:red; display:none'> Please enter Phone Number</span>
							<span id='forgot_msg2' style='color:red; display:none'> Enter a valid 10 Digit Mobile Number</span>
							<span id='forgot_msg3' style='color:red; display:none'>Phone Number does not exists</span>
                        </div>
						
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                          
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" id='forgot_submit'>Send OTP</button>
                        </div>
						</br>
						<!--<center><p style='padding-top:20px;'><a href="" id='resend_otp'>Resend OTP</a></p></center>
						<center><p style='padding-top:20px; color:blue; display:none;'><a id='otp_msg4'>OTP has been resent</a></p></center>-->
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
		$(".forgot_input").focus(function(){
			$("#forgot_msg1").hide();
			$("#forgot_msg2").hide();
			$("#forgot_msg3").hide();
		});
		$("#forgot_submit").click(function(){
			var forgot_phone=$('#forgot_phone').val();
			if(forgot_phone==''){$("#forgot_msg1").show();}
			else if(forgot_phone.length!=10){$("#forgot_msg2").show();}
			else{			 
			$.ajax({
			  url:"api/login_api.php",
			  data:"action=forgot&forgot_phone="+forgot_phone,
			  method:"POST",
			  dataType:"json"
					}).done(function(data){
						if(data.status=='failure'){
							$("#forgot_msg3").show();
						}
						else{
							window.localStorage.setItem("forgot_phn",data.response.forgot_phn);
							window.location = "reset.php";
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






