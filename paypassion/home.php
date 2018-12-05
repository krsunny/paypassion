<?php include 'header.php';?>
  <!-- START BREADCRUMB -->
               <br/>
               <br/>
               <br/>
               
				<div class="page-title">
				<h2 title="PayPassion | One Community, One Talent">Welcome To Paypassion</h2>
				</div>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
				<div class='container'>
				<h3 title="PayPassion | One Community, One Talent"> Your profile is only <span class="progress-bar-indicator"></span> complete. <a title="PayPassion | One Community, One Talent" href='edit_profile.php'>Click here</a> to complete it now</h3>
				 <div class="progress progress-small progress-striped active">
				 
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                  </div>
				</div>
				                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                               <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">Profile Views</div>
                                    <div class="widget-subtitle">Coming Soon</div>
                                </div>      
                                <div class="widget-controls">                                
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">Coming Soon</div>
                                </div>      
                                <div class="widget-controls">                                
                                   
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                                <div class="widget-item-left">
                                    <span class="fa fa-list"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">0</div>
                                    <div class="widget-title">Quotation</div>
                                    <div class="widget-subtitle">Coming Soon</div>
                                </div>
                                <div class="widget-controls">                                
                                  
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a title="PayPassion | One Community, One Talent" href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a title="PayPassion | One Community, One Talent" href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a title="PayPassion | One Community, One Talent" href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->   
					                    <div class="row">
                        <!-- END NEWS WIDGET -->

                        <!-- PROFILE WIDGET -->
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-body profile bg-info">

                                    <div class="profile-image">
                                        <img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" src="assets/images/users/user2.jpg" class="image_profile" alt="">
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name name_profile">John Doe</div>
                                        <div class="profile-data-title">UI/UX Designer</div>
                                    </div>
                                    

                                </div>
                                <div class="panel-body list-group">
                                    <a title="PayPassion | One Community, One Talent" href="edit_profile.php" class="list-group-item"><span class="fa fa-user"></span> Profile</a>
                                    <a title="PayPassion | One Community, One Talent" href="settings.php" class="list-group-item"><span class="fa fa-cog"></span> Settings</a>
                                    
                                    <a title="PayPassion | One Community, One Talent" href="logout.php" class="list-group-item"><span class="fa fa-sign-out"></span> Logoff</a>
                                </div>                            
                            </div>

                        </div>
                        <!-- END PROFILE WIDGET -->

                        <!-- SETTINGS WIDGET -->
                     <!--   <div class="col-md-6">   

							<div class="panel panel-default">                            
                                <div class="panel-body panel-body-image">
                                    <img src="assets/images/ocean.jpg" alt="Ocean"/>
                                    <a title="PayPassion | One Community, One Talent" href="#" class="panel-body-inform">
                                        <span class="fa fa-heart-o"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <h3>Ocean &mdash; body of saline water</h3>
                                    <p>On Earth, an ocean is one of the major conventional divisions of the World Ocean, which occupies two-thirds of the planet's surface.</p>
                                </div>
                                <div class="panel-footer text-muted">
                                    <span class="fa fa-clock-o"></span> 3d ago &nbsp;&nbsp;&nbsp;
                                    <span class="fa fa-comment-o"></span> 36
                                </div>
                            </div>

                        </div>
                        <!-- END SETTINGS WIDGET -->

                    </div>
				</div>
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
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
                    var _percent = data.response.percent;
                    _percent = Math.ceil(_percent);
                    $(".progress-bar-indicator").html(_percent+"%");
                    $(".progress-bar").html(_percent+"%").css("width", _percent+"%");
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
<?php include 'footer.php';?>