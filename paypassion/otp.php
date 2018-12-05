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
                <div class="login-body" id="screen_otp">
                    <div class="login-title"><strong>Verify</strong> Phone number</div>
                    <div class='register_form form-horizontal'>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control otp_input" id='otp' placeholder="Enter OTP here"/>
							<span id='otp_msg1' style='color:red; display:none'> Please enter OTP</span>
							<span id='otp_msg2' style='color:red; display:none'> OTP must be 6 numbers</span>
							<span id='otp_msg3' style='color:red; display:none'>Invalid OTP</span>
                        </div>
						
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                          
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" id='otp_submit'>Verify</button>
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
		$(".otp_input").focus(function(){
			$("#otp_msg1").hide();
			$("#otp_msg2").hide();
			$("#otp_msg3").hide();
		});
		$("#otp_submit").click(function(){
			var otp_phone=window.localStorage.getItem("reg_phone");
			var otp = $("#otp").val();
			if(otp==''){$("#otp_msg1").show();}
			else if(otp.length!=6){$("#otp_msg2").show();}
			else{			 
			$.ajax({
			  url:"api/register_api.php",
			  data:"action=otp_verify&otp_phone="+otp_phone+"&otp="+otp,
			  method:"POST",
			  dataType:"json"
					}).done(function(data){
						if(data.status=='failure' && data.message=='otp does not match'){
							$("#otp_msg3").show();
						}
						else{
							window.location = "login.php";
                            $("#screen_otp").hide();
                            $("#screen_login").hide();
						}
				  }); }
		});
		$("#resend_otp").click(function(){
			var resend_phone=window.localStorage.getItem("reg_phone");
			$.ajax({
			  url:"api/register_api.php",
			  data:"action=resend_otp&resend_phone="+resend_phone,
			  method:"POST",
			  dataType:"json"
					}).done(function(data){
						if(data.status=='success'){
							$("#otp_msg4").show();
							$("#resend_otp").hide();
						}
				  }); 
		});
		})
		</script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
		
    </body>
</html>






