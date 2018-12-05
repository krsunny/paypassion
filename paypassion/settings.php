<?php
include 'header.php';
?>
<style>
.spacer{
	padding-top:15pz;
}
</style>
<!--bread crumb Begins-->
<br/>
<br/><br/>
<div class="page-title">
<h2>Manage Crendentials</h2>
</div>
<!--bread crumb ends--> 
<!--Main Container Begins-->            
<div class="page-content-wrap">
	<div class="container">
		<div class="row">
			<div class='col-md-2'></div>
			<div class="col-md-8">
			<div class="form-group">
			
				<div class="col-md-8">                                            
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
						<input type="text"  class="form-control" id="setting_name" value='name goes here'/><br/>
                        
					</div>  
                    <span id="name_err1" style="display:none;">Please Enter Your Name</span>
                        <span id="name_err2" style="display:none;">Name must be more than 3 Characters</span>
					<span class="help-block"></span>
				</div>
				<div class='col-md-2'>
					<button class="btn btn-primary btn-block" id="name_update" >Update</button>
				</div>
			</div>
			<div class='clearfix'></div>
			</br>
			<div class="form-group">
			
				<div class="col-md-8">                                            
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
						<input type="text" value='Phone Number goes here' id="setting_phone" class="form-control"/>
					</div>    
                    <span id="name_err3" style="display:none;">Please Enter Your Phone Number.</span>
                        <span id="name_err4" style="display:none;">Phone number must be 10 digits.</span>
                        <span id="name_err5" style="display:none;">Phone number already exists.</span>
					<span class="help-block"></span>
				</div>
				<div class='col-md-2'>
					<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal" id="update_otp">Update</button>
				</div>
			</div>
			<div class='clearfix'></div>
			</br>
			<div class="form-group">
			
				<div class="col-md-8">                                            
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
						<input type="text" value='Email goes here' id="setting_email" class="form-control"/>
					</div>  
                     <span id="name_err6" style="display:none;">please enter your email.</span>
                        <span id="name_err7" style="display:none;">Wrong email id.</span>
					<span class="help-block"></span>
				</div>
				<div class='col-md-2'>
					<button class="btn btn-primary btn-block" id="email_update">Update</button>
				</div>
			</div>
			</div>
	</div>
	<div class='clearfix'></div>
			</br>
			<div class='row'>
			<div class='col-md-2'></div>
			<div class='col-md-8'>
			<div class='col-md-4'><button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal1">Change Password</button></div>
			<div class='col-md-4'><button class="btn btn-danger btn-block">Delete Account</button></div>
			</div>
			</div>
			</div>
		
</div>

<div class="alert alert-success" role="alert" style="display:none;" id="set_msg1">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Name Updated Succesfully</strong> .
                            </div>
<div class="alert alert-success" role="alert" style="display:none;" id="set_msg2">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Phone Number Updated Succesfully</strong>.
                            </div>
<div class="alert alert-success" role="alert" style="display:none;" id="set_msg3">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Email Updated Succesfully</strong>.
                            </div>
<div class="alert alert-success" role="alert" style="display:none;" id="set_msg4">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Email Updated Succesfully</strong>.
                            </div>
<!------------Modal 1 ends------------>
 <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
            function settingsRefresh(){
                var login_phone= window.localStorage.getItem('reg_phone');
                $.ajax({
                    url: "api/settings_api.php",
                    data: "action=view_setting&set_phone="+login_phone,
                    method: "POST",
                    type: "POST",
                    dataType: "json"
                 }).done(function(data){
                    if(data.status=="success"){
                        $("#setting_name").val(data.response.view_name);
                        $("#setting_phone").val(data.response.view_phone);
                        $("#setting_email").val(data.response.view_email);
                    } else {
                        console.log(data);
                    }
                    console.log(data);
                });
            };
            settingsRefresh();
            //update name
            $("#name_update").click(function(){
                var login_phone= window.localStorage.getItem('reg_phone');
                var updatename= $('#setting_name').val();
                if(updatename==""){
                   $("#name_err1").show();
                   }
                else if(updatename.length<3){
                    $("#name_err2").show();
                }
                else{
            $.ajax({
                url: "api/settings_api.php",
                data: "action=update_name&set_phone="+login_phone+"&updatename="+updatename,
                method: "POST",
                type: "POST",
                dataType: "json"
             }).done(function(data){
                 if(data.status=="success"){
                     $("#set_msg1").show();
                 }
             })
            }
             });
            //update phone
            $("#update_otp").click(function(){
                var updatephone= $('#setting_phone').val();
                var login_phone= window.localStorage.getItem('reg_phone');
               if(updatephone==""){
                    $("#name_err3").show();
        
                }
                else if(updatephone.length<10 || updatephone.length>10){
                   
                    $("#name_err4").show();
                }
                else{
                 $.ajax({
                url: "api/settings_api.php",
                data: "action=otp&set_phone="+login_phone+"&updatephone="+updatephone,
                method: "POST",
                type: "POST",
                dataType: "json"
             }).done(function(data){
                     if(data.status=="success"){
                         console.log(data);
                     }
                     else{
                         $(".close").click();
                     }
                 })
                }
                
            })
            //update email
            $("#email_update").click(function(){
                var login_phone= window.localStorage.getItem('reg_phone');
                var updateemail= $('#setting_email').val();
                var a = updateemail.indexOf("@");
                var b = updateemail.lastIndexOf(".");
                if(updateemail==""){
                   $("#name_err6").show();
                   }
                else if(a<1 || b<a+2 || b+2 == upadteemail.length){
                    $("#name_err7").show();
                }
                else{
            $.ajax({
                url: "api/settings_api.php",
                data: "action=update_email&set_phone="+login_phone+"&email="+updateemail,
                method: "POST",
                type: "POST",
                dataType: "json"
             }).done(function(data){
                 if(data.status=="success"){
                     $("#set_msg3").show();
                 }
             })
            }
             });
            //upate password
                $("#password_submit").click(function(){
                var login_phone= window.localStorage.getItem('reg_phone');
                var updatepassword= $('#setting_password').val();
                var newp= $('#new_password').val();
                var conp= $('#confirm_password').val();
                if(updatepassword==""){
                   $("#name_err8").show();
                   }
                else if(updatepassword == newp){
                    $("#name_err9").show();
                }
                else if(newp == conp){
            $.ajax({
                url: "api/settings_api.php",
                data: "action=update_password&set_phone="+login_phone+"&oldpassword="+updatepassword+"&newpassword="+newp,
                method: "POST",
                type: "POST",
                dataType: "json"
             }).done(function(data){
                 if(data.status=="success"){
                     $("#set_msg4").show();
                 }
             })
            }
             });
            $("#otp_submit").on("click", function(){
                var _otp = $("#otp_capture").val();
                var _num = $("#setting_phone").val();
                $.ajax({
                    url: "api/settings_api.php",
                    data: "action=otp_confirm&otp="+_otp+"&updatephone="+_num,
                    method: "POST",
                    type: "POST",
                    dataType: "json"
                }).done(function(data){
                    if(data.status=="success"){
                        $("#set_msg4").show();
                        window.localStorage.setItem('reg_phone', _num);
                        settingsRefresh();
                    } else {
                        
                    }
                    console.log(data);
                });
            });
        // Default function to check if user is logged in 
        if (window.localStorage.getItem("reg_phone")) {
            //personal and contact information display 
            var login_phone = window.localStorage.getItem('reg_phone');
            $.ajax({
                url: "api/profile_api.php",
                data: "action=profile_details&set_phone=" + login_phone,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    $("#type_gig").val(data.response.view_type);
                    $("#address_gig").val(data.response.view_address);
                    $("#pincode_gig").val(data.response.view_pincode);
                    $("#state_gig").val(data.response.view_state);
                    $("#dob_gig").val(data.response.view_dob);
                    $("#gender_gig").val(data.response.view_gender);
                    $("#district_gig").val(data.response.view_district);
                    $("#country_gig").val(data.response.view_country);
                    $("#about_gig").val(data.response.view_about);
                    $(".name_profile").html(data.response.view_name);
                     $(".image_profile").prop('src', "img_profile/" + data.response.view_photo);
                } else {

                }
                console.log(data);
            });
        }
		if(window.localStorage.getItem('reg_phone')){
		
			}else{
			window.location.assign("register.php");
			}
		});
       
		</script>
<?php
include 'footer.php';
?>


<!--Main Container Ends--> 
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" id="click" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">OTP</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-1"></div>
						<div class="">
							<div class="form-group">
							<div class="col-md-12">                                                                                
							<input type="text" class="form-control" placeholder="Enter Your Otp Here" id="otp_capture" />
							<span class="help-block"></span>
							</div>
							</div>
                            <span id="name_err8" style="display:none;">please enter your old password.</span>
                        <span id="name_err9" style="display:none;">password already exist.</span>
							</br>
						</div>
					</div>
				</div>
				<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal" id="otp_submit">Submit</button>
	</div>
			</div>
		</div>
	
</div>
<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Change Password</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-1"></div>
						<div class="">
							<div class="form-group">
							<div class="col-md-12">                                                                                
							<input type="Password" class="form-control" id="setting_password" placeholder="Old Password"><br/>
							<input type="Password" class="form-control" id="new_password" placeholder="New Password"><br/>
							<input type="Password" class="form-control" id="confirm_password" placeholder="Confirm Password"><br/>
							<span class="help-block"></span>
							</div>
							</div>
							</br>
						</div>
					</div>
				</div>
				<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal" id="password_submit">Submit</button>
	</div>
			</div>
		</div>
	
</div>