<?php
include 'header.php';
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
	img:before{background-image:url(‘img/bg.png’);}
    .file-drop-area {
      border: 1px dashed rgba(255, 255, 255, 0.4);
      border-radius: 3px;
      position: relative;
      width: 450px;
      max-width: 100%;
      margin: 0 auto;
      padding: 26px 20px 30px;
      -webkit-transition: 0.2s;
      transition: 0.2s;
      background: -webkit-linear-gradient(left, #4568dc, #b06ab3);
      background: linear-gradient(to right, #4568dc, #b06ab3);
      color: #D7D7EF;
      font-family: 'Lato', sans-serif;
    }
    .file-drop-area.is-active {
      background-color: rgba(255, 255, 255, 0.05);
    }
    
    .fake-btn {
      background-color: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 3px;
      padding: 8px 15px;
      margin-right: 8px;
      font-size: 12px;
      text-transform: uppercase;
    }
    
    .file-msg {
      font-size: small;
      font-weight: 300;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: inline-block;
      max-width: calc(100% - 130px);
      vertical-align: middle;
    }
    
    .file-input {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      cursor: pointer;
      opacity: 0;
    }
    .file-input:focus {
      outline: none;
    }
</style>
  <!-- START BREADCRUMB -->
               <br/>
               <br/>
               <br/>
           
				<div class="page-title">
				<h2>Please Fill All The Details Here.</h2>
				</div>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap" style='min-height:700px;'>
				        <div class="container">
                            <!-- START ACCORDION -->        
                            <div class="panel-group accordion">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColOne" id="accord1">
                                                Personal and Contact Information
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body panel-body-open" id="accOneColOne">
								<div class='row'>
										<div class="profile bg-info">

                                    <div class="profile-image " style="padding-left:51px">
                                        <img src="assets/images/users/user2.jpg" class="image_profile" alt="">
                                        <button class="btn" data-toggle='modal' data-target='#myModal10' style="background:#5dc0cf;"><span class="fa fa-pencil"></span></button>
                                    </div>
                                           
                                    <div class="profile-data ">
                                        <div class="profile-data-name name_profile" >John Doe</div>
                                        <div class="profile-data-title "></div>
                                       <center> <div class="input-group">
                                         <textarea class="form-control" id="tagline_profile" placeholder="Enter Your Tagline Here" style="background:#5dc0cf; border:0px;font-variant-position:sub;text-align:center;"></textarea>
                                            </div></center>
                                    </div>
                                    
                                    </div>
                                    </div>

                                
						<br>
						<br>
								<div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Type</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control " id="type_gig">
                                                        <option value='individual'>Individual</option>
                                                        <option value='group'>Group</option>

                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
											 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Date Of Birth</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="2014-11-01" id="dob_gig">                                            
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Gender</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control " id="gender_gig">
                                                        <option value='male'>Male</option>
                                                        <option value='female'>Female</option>

                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                                
                                            </div>
											 <div class="form-group">
                                                <label class="col-md-3 control-label">City</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="district_gig"/>
                                                    </div>                                            
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                          
                                           <div class="form-group">                                        
                                                <label class="col-md-3 control-label">State</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="state_gig"/>
                                                    </div>            
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Country</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="country_gig"/>
                                                    </div>                                            
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
											 </div>
                                        <div class="col-md-6">
                                            
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Pincode</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="pincode_gig"/>
                                                    </div>
                                                   
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
											
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Address</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="address_gig"></textarea>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">About</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" id="about_gig"></textarea>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
											
                                            </div>
										</div><br/>
										 <div class="form-group">          <div class="col-md-2"></div>                               
                                            <div class="col-md-4">
                                                <button class="btn btn-primary btn-block" id="save_gig">Save</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-info btn-block" id="next_gig">Next</button>
                                            </div>                                        
                                        </div>
									</div>
                                   

                                </div>
                                <div class="alert alert-success msg_alert" role="alert" style="display:none;position: fixed;z-index: 9999;width:75%;" >
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Profile Updated Succesfully</strong>.
                            </div>
                                     <div class="alert alert-danger msg_alert1" role="alert" style="display:none;position: fixed;z-index: 9999;width:75%;" id="">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Fill out Missing Fields.</strong>.
                            </div>
								
                                                           
                               <!--giginfo table-->
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColTwo" id="accord2">
                                                Gig Information
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="accOneColTwo">
                                        

                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                           

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions ">
                                            <thead>
                                                <tr>
                                                    
                                                   
                                                    <th >Gig Area</th>
                                                    <th width="100" >Gig Level</th>
                                                    <th width="100" >No of Gigs</th>
                                                    <th width="100" >Genere</th>
                                                    <th width="100" >Keywords</th>
                                                    <th width="100" >Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="display_details">                                            
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>                                
									 <div class="form-group">          <div class="col-md-2"></div>                               
                                            <div class="col-md-4">
                                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Add</button>
                                            </div> 
											<div class="col-md-4">
                                                <button class="btn btn-info btn-block" id="giginfo_next">Next</button>
                                            </div>  											
                                        </div>
                                </div>
                            </div>                                                

                        </div>
                  
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColThree">
                                                Experience
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="accOneColThree">
                                       <div class="row">
                        <div class="col-md-12">
                           

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Gig Title</th>
                                                    <th width="100">Gig Place</th>
                                                    <th width="100">Gig Date</th>
                                                    
                                                    <th width="100">Image1</th>
                                                    <th width="100">Image2</th>
                                                    <th width="100">Image3</th>
                                                    <th width="100">Image4</th>
                                                    <th width="100">Image5</th>
                                                    <th width="100">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="display_experience">                                            
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>                                
									<center>  <div class="form-group">          <div class="col-md-2"></div>                               
                                            <div class="col-md-4">
												<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal1">Add</button>
                                            </div> 
											<div class="col-md-4">
                                                <button class="btn btn-info btn-block" id="next_exp">Next</button>
                                            </div>  											
                                        </div></center>
                                </div>
                            </div>      
                                    </div>                                
                                </div>
								 <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColFour">
                                               Achievements
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="accOneColFour">
                                        <div class="row">
                        <div class="col-md-12">
                           

                                     <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50" style="display:none;">Sl.No.</th>
                                                    <th>Achievements Title</th>
                                                    <th width="100">Place</th>
                                                    <th width="100">Date</th>
                                                    <th width="100">Image1</th>
                                                    <th width="100">Image2</th>
                                                    <th width="100">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="display_achievement">                                            
                                               
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>                                 
									<center>  <div class="form-group">          <div class="col-md-2"></div>                               
                                            <div class="col-md-8">
                                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal2">Add</button>
                                            </div> 
											 											
                                        </div></center>
                                </div>
                            </div>      
                                    </div>                                
                                </div>
                            </div>
                            <!-- END ACCORDION -->                        
                        </div>
				</div>
</div>
</div>
</div>
</div>
<!------------Modal 1------------>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add Gig Info</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group" style="display:none;">                                        
							<label class="col-md-3 control-label">Sl. No</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="add_sl_no"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<br/>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig Area</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="add_gig_area"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig level</label>
							<div class="col-md-9 col-xs-12">
							<div class="">
							<select class="form-control " id="add_gig_level">
                            <option value='novice'>Novice</option>
                            <option value='amateur'>Amateur</option>
                            <option value='beginner'>Beginner</option>
                            <option value='intermediate'>Intermediate</option>
                            <option value='professional'>Professional</option>

                            </select>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">No. Of Gigs</label>
							<div class="col-md-9 col-xs-12">
							<div class="">
							<select class="form-control " id="add_no_of_gigs">
                            <option value='1'>1</option>
                            <option value='less than 5'>Less Than 5</option>
                            <option value='5-10'>5-10</option>
                            <option value='10-20'>10-20</option>
                            <option value='more than 20'>More Than 20</option>
                            

                            </select>
							</div>             
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Genre</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="add_genre"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
                             <div class="form-group">
							<label class="col-md-3 control-label">Keywords</label>
							<div class="col-md-9">
								<input type="text" class="tagsinput_2" id="" />

							</div>
							</div>
							<!--<div class="form-group">
							<label class="col-md-3 control-label">Tags</label>
							<div class="col-md-9">
							<input type="text" class="tagsinput" value="First,Second,Third"/>

							</div>
							</div>-->

						</div>
					</div>
				</div>
				<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal" id="add_giginfo">Submit</button>
	</div>
           
			</div>
		</div>
	
</div>
                    <div class="alert alert-danger" role="alert" style="display:none;" id="set_msg9">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Fill out Missing Fields.</strong>.
                            </div>
<!------------Modal 1 ends------------>
<!------------Modal 1------------>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Experience</h4>
      </div>
      <div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group" style="display:none;">
								<label class="col-md-3 control-label">Id</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" id="id2" class="form-control"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
						<div class="form-group">
								<label class="col-md-3 control-label">Gig Title</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" id="add_gig_title" class="form-control"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
						<div class="form-group">
								<label class="col-md-3 control-label">Gig Place</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" id="add_gig_place" class="form-control"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
							 <div class="form-group">                                        
								<label class="col-md-3 control-label">Gig Date</label>
								<div class="col-md-9">
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										<input type="text" id="add_gig_date" class="form-control datepicker" value="2014-11-01">                                            
									</div>
									<span class="help-block"></span>
								</div>
							</div>
							 <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-mail-forward"></span>upload Images</h3>
                                    <p>Upload Images of your Previous gigs. Please Select best 5</p>                                    
                                    <form enctype="multipart/form-data" class="form-horizontal">                                        
                                       <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 1</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add file-input" accept="image/*" type="file" data-id="1" />
                                </div>
                                <input type="hidden" id="add_gig_img1" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">Image 2</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add file-input" accept="image/*" type="file" data-id="2" />
                                </div>
                                <input type="hidden" id="add_gig_img2" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">Image 3</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add file-input" accept="image/*" type="file" data-id="3" />
                                </div>
                                <input type="hidden" id="add_gig_img3" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">Image 4</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add file-input" accept="image/*" type="file" data-id="4" />
                                </div>
                                <input type="hidden" id="add_gig_img4" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">Image 5</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add file-input" accept="image/*" type="file" data-id="5" />
                                </div>
                                <input type="hidden" id="add_gig_img5" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
                                    </form>
                                </div>
                            </div>
							<div class="clearfix"></div><br/>
							 <div class="row">
							    <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_add_img1"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_add_img2"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_add_img3"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_add_img4"/>
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-sm-2">
    							    <img src="img/bg.png" height='100' width='100' id="gig_add_img5"/>
                                </div>
							</div>
						</div>
					</div>
				</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="add_exp">Submit</button>
      </div>
<div id="loading2" style="display:none;position: absolute;top: 0px;left: 0px;width: 100%;opacity:0.9;background-color:white;height:100%;">
                    <img src="img/giphy.gif" style="width:100px;left: 41%;position: absolute;top: 38%;" alt="" />
                </div>
    </div>

  </div>
</div>
<!------------Modal 1 ends------------>
<!------------Modal 1------------>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Achievements</h4>
      </div>
      <div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
						<div class="form-group"style="display:none;">
								<label class="col-md-3 control-label">Id</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" class="form-control" id="id4"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
						<div class="form-group">
								<label class="col-md-3 control-label">Achievements Title</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" class="form-control" id="add_ach_title"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
						<div class="clearfix"></div>
						<div class="form-group">
								<label class="col-md-3 control-label">Achievements place</label>
								<div class="col-md-9">                                            
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
										<input type="text" class="form-control" id="add_ach_place"/>
									</div>                                            
									<span class="help-block"></span>
								</div>
							</div>
							<div class="clearfix"></div>
							 <div class="form-group">                                        
								<label class="col-md-3 control-label">Achievements Date</label>
								<div class="col-md-9">
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										<input type="text" class="form-control datepicker" value="2014-11-01" id="add_ach_date">                                            
									</div>
									<span class="help-block"></span>
								</div>
							</div>
							 <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-mail-forward"></span>upload Images</h3>
                                    <p>Upload Images of your Previous gigs.</p>                                    
                                    <form enctype="multipart/form-data" class="form-horizontal">                                        
                                        <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 1</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add_ach file-input" accept="image/*" type="file" data-id="1" />
                                </div>
								<input type="hidden" id="ach_add_img1"/>
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							 <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 2</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_add_ach file-input" accept="image/*" type="file" data-id="2" />
                                </div>
								<input type="hidden" id="ach_add_img2"/>
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
							 <div class="row">
							    <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="add_ach_img1"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="add_ach_img2"/>
                                </div>
                            </div><br/>
                                    </form>
                                </div>
                            </div>
						</div>
					</div>
				</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="add_ach">Submit</button>
      </div>
		<div id="loading4" style="display:none;position: absolute;top: 0px;left: 0px;width: 100%;opacity:0.9;background-color:white;height:100%;">
        <img src="img/giphy.gif" style="width:100px;left: 41%;position: absolute;top: 38%;" alt="" />
        </div>
    </div>

  </div>
</div>
<!------------Modal 1 ends------------>
<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Add Gig Info</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
							
							<div class="form-group" style="display:none;">                                        
							<label class="col-md-3 control-label">ID</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" disabled id="id"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<br/>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig Area</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="gig_area"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig level</label>
							<div class="col-md-9 col-xs-12">
							<div class="">
							<select class="form-control " id="gig_level">
                            <option value='novice'>Novice</option>
                            <option value='amateur'>Amateur</option>
                            <option value='beginner'>Beginner</option>
                            <option value='intermediate'>Intermediate</option>
                            <option value='professional'>Professional</option>

                            </select>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">No. Of Gigs</label>
							<div class="col-md-9 col-xs-12">
							<div class="">
							<select class="form-control " id="no_of_gigs">
                            <option value='1'>1</option>
                            <option value='less than 5'>Less Than 5</option>
                            <option value='5-10'>5-10</option>
                            <option value='10-20'>10-20</option>
                            <option value='more than 20'>More Than 20</option>
                            

                            </select>
							</div>               
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Genre</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="genre"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
                             <div class="form-group">
							<label class="col-md-3 control-label">Keywords</label>
							<div class="col-md-9">
								<input type="text" class="tagsinput_1" id="" />

							</div>
							</div>
							<!--<div class="form-group">
							<label class="col-md-3 control-label">Tags</label>
							<div class="col-md-9">
							<input type="text" class="tagsinput" value="First,Second,Third"/>

							</div>
							</div>-->
						</div>
					</div>
				</div>
				<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal" id="submit_giginfo">Submit</button>
	</div>
           
			</div>
		</div>
	
</div>
 <div class="alert alert-danger" role="alert" style="display:none;" id="set_msg7">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Fill out Missing Fields.</strong>.
                            </div>
<div class="alert alert-success" role="alert" style="display:none;" id="set_msg8">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>Gig Info Updated Successfully</strong>.
                            </div>
<!--experience edit modal-->
                    <div id="myModal4" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Experience</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group" style="display:none;">                                        
							<label class="col-md-3 control-label">Id</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" disabled id="id1"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<br/>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig Title</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="gig_title"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Gig Place</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="gig_place"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Gig Date</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="2014-11-01" id="gig_date">                                            
                                                    </div>
                                                    <span id="err_msg1" style="display:none;">You are not eligible for paypassion</span>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 1</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload file-input" accept="image/*" type="file" data-id="1" />
                                </div>
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                             <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 2</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
                                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload file-input" accept="image/*" type="file" data-id="2" />
                                </div>
                            </div>
                                   
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 3</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
                                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload file-input" accept="image/*" type="file" data-id="3" />
                                </div>
                            </div>
                                   
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 4</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
                                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload file-input" accept="image/*" type="file" data-id="4" />
                                </div>
                            </div>
                                   
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 5</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
                                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload file-input" accept="image/*" type="file" data-id="5" />
                                </div>
                            </div>
                                   
							<span class="help-block"></span>
							</div>
							</div>
							<div class="clearfix"></div><br/>
                            <div class="row">
							    <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_img1"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_img2"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_img3"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="gig_img4"/>
                                </div>
                            </div><br/>
                            <div class="row">
                                <div class="col-sm-2">
    							    <img src="img/bg.png" height='100' width='100' id="gig_img5"/>
                                </div>
							</div>
							
							<!--<div class="form-group">
							<label class="col-md-3 control-label">Tags</label>
							<div class="col-md-9">
							<input type="text" class="tagsinput" value="First,Second,Third"/>

							</div>
							</div>-->
							<div id="loading1" style="display:none;position: absolute;top: 0px;left: 0px;width: 100%;opacity:0.9;background-color:white;height:100%;">
                    <img src="img/giphy.gif" style="width:100px;left: 41%;position: absolute;top: 38%;" alt="" />
                </div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal" id="submit_gigexp">Submit</button>
	</div>
           
			</div>
		</div>
	
</div>
                     <div class="alert alert-success" role="alert" style="display:none;" id="set_msg10">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>updated successfully</strong>.
                            </div>
                    <div class="alert alert-danger" role="alert" style="display:none;" id="set_msg11">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>fill out missing fields.</strong>.
                            </div>
<!--modal5-->
 <div id="myModal5" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Achievement</h4>
			</div>
				<div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group" style="display:none;">                                        
							<label class="col-md-3 control-label">Id</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" disabled id="id3"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>

							<div class="form-group">                                        
							<label class="col-md-3 control-label">Achievement Title</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="ach_title"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-group">                                        
							<label class="col-md-3 control-label">Achievement Place</label>
							<div class="col-md-9 col-xs-12">
							<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
							<input type="text" class="form-control" id="ach_place"/>
							</div>            
							<span class="help-block"></span>
							</div>
							</div>
							<div class="clearfix"></div>
							<div class="form-group">                                        
                            <label class="col-md-3 control-label">Achievement date</label>
                            <div class="col-md-9 col-xs-12">
                            <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                           <input type="text" class="form-control datepicker" value="2014-11-01" id="ach_date"> </div>
                        
                           <span class="help-block"></span>
                            </div>
                           </div>
							<div class="clearfix"></div>
                            <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 1</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload_ach file-input" accept="image/*" type="file" data-id="1" />
                                </div>
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                             <div class="form-group">                                        
							<label class="col-md-3 control-label">Image 2</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
                                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_upload_ach file-input" accept="image/*" type="file" data-id="2" />
                                </div>
                            </div>
                                   
							<span class="help-block"></span>
							</div>
							</div>
                            <div class="clearfix"></div><br/>
                           
                           
                           
							<div class="clearfix"></div><br/>
                            <div class="row">
							    <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="ach_img1"/>
                                </div>
                                <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="ach_img2"/>
                                </div>
                            </div><br/>
                            
							
							<!--<div class="form-group">
							<label class="col-md-3 control-label">Tags</label>
							<div class="col-md-9">
							<input type="text" class="tagsinput" value="First,Second,Third"/>

							</div>
							</div>-->
						</div>
					</div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" id="submit_gigach">Submit</button>
				</div>
				<div id="loading3" style="display:none;position: absolute;top: 0px;left: 0px;width: 100%;opacity:0.9;background-color:white;height:100%;">
                <img src="img/giphy.gif" style="width:100px;left: 41%;position: absolute;top: 38%;" alt="" />
                </div>
           
			</div>
		</div>
	
</div>
                     <div class="alert alert-success" role="alert" style="display:none;" id="set_msg15">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>updated successfully</strong>.
                            </div>
                    <div class="alert alert-danger" role="alert" style="display:none;" id="set_msg17">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>fill out missing fields.</strong>.
                            </div>
<!--modal for delete-->
<div id="myModal6" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<!-- Modal content-->
		<div class="modal-content">
			
				<div class="modal-body">
					<div class="row">
					
						<div class="col-md-12">
							<p>Are You Sure want to delete?</p>

							<button type="button" class="btn btn-default" data-dismiss="modal" id="delete">OK</button>
							<input type="hidden" id="id_delete">
                           </div>

							</div>
                           
						</div>
					
				
				
</div>
</div>
           
			</div>
	
<!--modal for delete-->
<div id="myModal7" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<!-- Modal content-->
		<div class="modal-content">
			
				<div class="modal-body">
					<div class="row">
					
						<div class="col-md-12">
							<p>Are You Sure want to delete?</p>

							<button type="button" class="btn btn-default" data-dismiss="modal" id="delete1">OK</button>
							<input type="hidden" id="id_delete1">
                           </div>

							</div>
                           
						</div>
					
				
				
</div>
</div>
           
			</div>
<!--modal for delete-->
<div id="myModal9" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
	<!-- Modal content-->
		<div class="modal-content">
			
				<div class="modal-body">
					<div class="row">
					
						<div class="col-md-12">
							<p>Are You Sure want to delete?</p>

							<button type="button" class="btn btn-default" data-dismiss="modal" id="delete2">OK</button>
							<input type="hidden" id="id_delete2">
                           </div>

							</div>
                           
						</div>
					
				
				
</div>
</div>
           
			</div>
<!--modal for profile image upload-->
<div id="myModal10" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Profile Pic</h4>
      </div>
      <div class="modal-body">
					<div class="row">
					<div class="col-md-2"></div>
						<div class="col-md-8">
							 <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-mail-forward"></span>Upload Profile Picture</h3>
                                    <p></p>                                    
                                    <form enctype="multipart/form-data" class="form-horizontal">                                        
                                       <div class="form-group">                                        
							<label class="col-md-3 control-label">Image</label>
							<div class="col-md-9 col-xs-12">
				            <div class="col-md-12">
				                <div class="file-drop-area">
                                    <span class="fake-btn">Choose files</span>
                                    <span class="file-msg js-set-number">or drag and drop files here</span>
                                    <input class="image_profile file-input" accept="image/*" type="file" data-id="1" />
                                </div>
                                <input type="hidden" id="" />
                            </div>
							<span class="help-block"></span>
							</div>
							</div>
                                    </form>
                                </div>
                            </div>
							<div class="clearfix"></div><br/>
							 <div class="row">
							    <div class="col-sm-3">
    							    <img src="img/bg.png" height='100' width='100' id="add_image_profile"/>
                                </div>
                            </div>
						</div>
					</div>
				</div>
<div id="loading5" style="display:none;position: absolute;top: 0px;left: 0px;width: 100%;opacity:0.9;background-color:white;height:100%;">
                    <img src="img/giphy.gif" style="width:100px;left: 41%;position: absolute;top: 38%;" alt="" />
                </div>
    </div>

  </div>
</div>
<!--script starts here-->

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
                    $("#tagline_profile").val(data.response.view_tagline);
                    $(".name_profile").html(data.response.view_name);
                    $(".image_profile").prop('src', "img_profile/" + data.response.view_photo);
                } else {

                }
                console.log(data);
            });
        }
        //personal and contact information update
        $("#save_gig").click(function() {
            var set_phone = window.localStorage.getItem('reg_phone');
            var updatetype = $("#type_gig").val();
            var updatedob = $("#dob_gig").val();
            var updategender = $("#gender_gig").val();
            var updatedistrict = $("#district_gig").val();
            var updatestate = $("#state_gig").val();
            var updatecountry = $("#country_gig").val();
            var updatepincode = $("#pincode_gig").val();
            var updateaddress = $("#address_gig").val();
            var updateabout = $("#about_gig").val();
            var updatetagline = $("#tagline_profile").val();
            if (updatetype == "" || updatedob == "" || updategender == "" || updatedistrict == "" || updatestate == "" || updatecountry == "" || updatepincode == "" || updateaddress == "" || updateabout == "" || updatetagline == "") {
                $(".msg_alert1").show();
            } else {
                $.ajax({
                    url: "api/profile_api.php",
                    data: "action=update_details&set_phone=" + set_phone + "&updatetype=" + updatetype + "&updatedob=" + updatedob + "&updategender=" + updategender + "&updatedistrict=" + updatedistrict + "&updatestate=" + updatestate + "&updatecountry=" + updatecountry + "&updatepincode=" + updatepincode + "&updateaddress=" + updateaddress + "&updateabout=" + updateabout+"&updatetagline=" + updatetagline,
                    method: "POST",
                    type: "POST",
                    dataType: "json"
                }).done(function(data) {
                    if (data.status == "success") {
                        $(".msg_alert").show();
                    }

                })
            }
        })
        //personal contact accordion hide and gig info accordion show
        $("#next_gig").click(function() {
            $("#accOneColOne").hide();
            $("#accOneColTwo").show();
        });
        //gig info display
        function addFunction() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var a = "";
            var b = "";

            $.ajax({
                url: "api/giginfo_api.php",
                data: "action=giginfo&set_phone=" + login_phone,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    for (i = 0; i < data.response.disp.length; i++) {
                        a = data.response.disp[i];
                        b += "<tr><td  style='display:none;' class='gig_id'>" + a.id + "</td><td class='text-center gig_view_id' style='display:none;'>" + a.view_id + "</td><td style='font-weight:bold;' class='gig_view_area'>" + a.view_area + "</td><td><span class='label label-success gig_view_level'>" + a.view_level + "</span></td><td class='gig_view_noofgigs'>" + a.view_noofgigs + "</td><td class='gig_view_genre'>" + a.view_genre + "</td><td class='gig_view_keywords'>" + a.view_keywords + "</td><td><button class='btn btn-default btn-rounded btn-sm edit_giginfo' data-toggle='modal' data-target='#myModal3'><span class='fa fa-pencil'></span></button><button id='" + a.id + "' class='btn btn-danger btn-rounded btn-sm' data-toggle='modal' data-target='#myModal6' onClick='document.getElementById(\"id_delete\").value = this.id;'><span class='fa fa-times'></span></button></td></tr>";
                    }
                }
                $(".display_details").html(b);
                bindFunction();
            });
        };
        addFunction();
        // function to bind the click action on the button
        //edit gig info
        var addTag_1 = function(tag) {
            console.log(tag);
            //setTimeout(function(){$(".tagsinput_1").val($(".tagsinput_1").val()+","+tag);},500);
        };

        function removeTag_1(tag) {
            console.log(tag);
            var _a = $(".tagsinput_1").val().split(",");
            var _x = (_a.indexOf(tag) > -1) ? (_a.indexOf(tag)) : 99999;
            _a.splice(_x, 1);
            $(".tagsinput_1").val(_a.join(","));
        };

        function bindFunction() {
            $(".edit_giginfo").click(function() {
                var _id = $(this).parent().parent().find(".gig_id").html();
                var _view_id = $(this).parent().parent().find(".gig_view_id").html();
                var _view_area = $(this).parent().parent().find(".gig_view_area").html();
                var _view_level = $(this).parent().parent().find(".gig_view_level").html();
                var _view_noofgigs = $(this).parent().parent().find(".gig_view_noofgigs").html();
                var _view_genre = $(this).parent().parent().find(".gig_view_genre").html();
                var _view_keywords = $(this).parent().parent().find(".gig_view_keywords").html();
                $("#id").val(_id);
                $("#sl_no").val(_view_id);
                $("#gig_area").val(_view_area);
                $("#gig_level").val(_view_level);
                $("#no_of_gigs").val(_view_noofgigs);
                $("#genre").val(_view_genre);
                $(".tagsinput_1").val(_view_keywords);
                if ($(".tagsinput_1").length > 0) {
                    var _this = $(".tagsinput_1");
                    $('#' + _this.attr("id") + '_tagsinput').remove();
                    if ($(_this).data("placeholder") != '') {
                        var dt = $(_this).data("placeholder");
                    } else
                        var dt = 'add a tag';
                    $(_this).tagsInput({
                        width: '100%',
                        height: 'auto',
                        defaultText: dt,
                        onAddTag: addTag_1,
                        onRemoveTag: removeTag_1
                    });
                }
                var $fileInput = $('.file-input');
                var $droparea = $('.file-drop-area');
                // highlight drag area
                $fileInput.on('dragenter focus click', function() {
                    $droparea.addClass('is-active');
                });
                // back to normal state
                $fileInput.on('dragleave blur drop', function() {
                    $droparea.removeClass('is-active');
                });
            });
        };
        //update gig info
        $("#submit_giginfo").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id = $("#id").val();
            var updategigster_area = $("#gig_area").val();
            var updategigster_level = $("#gig_level").val();
            var updategigster_noofgigs = $("#no_of_gigs").val();
            var updategigster_genre = $("#genre").val();
            var updategigster_keywords = $(".tagsinput_1").val();
            if (updategigster_area == "" || updategigster_level == "" || updategigster_noofgigs == "" || updategigster_genre == "" || updategigster_keywords == "") {
                $(".msg_alert1").show();
            } else {
                $.ajax({
                    url: "api/giginfo_api.php",
                    data: "action=update_giginfo&set_phone=" + login_phone + "&id=" + id + "&updategigster_area=" + updategigster_area + "&updategigster_level=" + updategigster_level + "&updategigster_noofgigs=" + updategigster_noofgigs + "&updategigster_genre=" + updategigster_genre + "&updategigster_keywords=" + updategigster_keywords,
                    method: "POST",
                    type: "POST",
                    dataType: "json"
                }).done(function(data) {
                    if (data.status == "success") {
                        $(".msg_alert").show();
                    }

                }).always(function(data) {
                    console.log(data);
                });
            }
        });
        //add new giginfo to the table
        $("#add_giginfo").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var gigster_id = window.localStorage.getItem('reg_phone');
            // This should also do
            var gigster_area = $("#add_gig_area").val();
            var gigster_level = $("#add_gig_level").val();
            var gigster_noofgigs = $("#add_no_of_gigs").val();
            var gigster_genre = $("#add_genre").val();
            var gigster_keywords = $(".tagsinput_2").val();
            if (gigster_area == "" || gigster_level == "" || gigster_noofgigs == "" || gigster_genre == "" || gigster_keywords == "") {
                $("#msg_alert1").show();
            } else {
                $.ajax({
                    url: "api/giginfo_api.php",
                    data: "action=giginfo_insert&set_phone=" + login_phone + "&gigster_id=" + gigster_id + "&gigster_area=" + gigster_area + "&gigster_level=" + gigster_level + "&gigster_noofgigs=" + gigster_noofgigs + "&gigster_genre=" + gigster_genre + "&gigster_keywords=" + gigster_keywords,
                    method: "POST",
                    type: "POST",
                    dataType: "json"
                }).done(function(data) {
                    if (data.status == "success") {
                        $(".msg_alert").show();
                        addFunction();
                    }
				else{
					
				}
					$("#add_gig_area").val("");
					$("#add_gig_level").val("");
					$("#add_no_of_gigs").val("");
					$("#add_genre").val("");
					$(".tagsinput_2").val("");
                });
            }
        });
        //hide giginfo and show experience
        $("#giginfo_next").click(function() {
            $("#accOneColTwo").hide();
            $("#accOneColThree").show();
        })
        //experience display
        function deleteFunction() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var c = "";
            var d = "";

            $.ajax({
                url: "api/gigexperience_api.php",
                data: "action=gigexperience&set_phone=" + login_phone,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {

                    for (i = 0; i < data.response.disp.length; i++) {
                        c = data.response.disp[i];
                        d += "<tr><td class='text-center exp_id' style='display:none;'>" + c.id + "</td><td class='exp_view_id' style='display:none;'>" + c.view_id + "</td><td><span class='label label-success exp_view_title'>" + c.view_title + "</span></td><td class='exp_view_place'>" + c.view_place + "</td><td class='exp_view_date'>" + c.view_date + "</td><td class='exp_view_img1'><img src='img/" + c.view_img1 + "' height='50' width='50' /></td><td class='exp_view_img2'><img src='img/" + c.view_img2 + "' height='50' width='50'/></td><td class='exp_view_img3'><img src='img/" + c.view_img3 + "' height='50' width='50'/></td><td class='exp_view_img4'><img src='img/" + c.view_img4 + "' height='50' width='50'/></td><td class='exp_view_img5'><img src='img/" + c.view_img5 + "' height='50' width='50'/></td><td><button class='btn btn-default btn-rounded btn-sm edit_gigexp' data-toggle='modal' data-target='#myModal4'><span class='fa fa-pencil'></span></button><button id='" + c.id + "' class='btn btn-danger btn-rounded btn-sm'data-toggle='modal' data-target='#myModal7' onClick='document.getElementById(\"id_delete1\").value = this.id;'><span class='fa fa-times'></span></button></td></tr>";
                    }
                }
                $(".display_experience").html(d);
                attachFunction();

            });
        };
        deleteFunction();
        //experience edit
        function attachFunction() {
            $(".edit_gigexp").click(function() {

                var _id = $(this).parent().parent().find(".exp_id").html();
                var _view_id = $(this).parent().parent().find(".exp_view_id").html();
                var _view_title = $(this).parent().parent().find(".exp_view_title").html();
                var _view_place = $(this).parent().parent().find(".exp_view_place").html();
                var _view_date = $(this).parent().parent().find(".exp_view_date").html();
                var _view_img1 = $(this).parent().parent().find(".exp_view_img1").find("img").prop("src");
                var _view_img2 = $(this).parent().parent().find(".exp_view_img2").find("img").prop("src");
                var _view_img3 = $(this).parent().parent().find(".exp_view_img3").find("img").prop("src");
                var _view_img4 = $(this).parent().parent().find(".exp_view_img4").find("img").prop("src");
                var _view_img5 = $(this).parent().parent().find(".exp_view_img5").find("img").prop("src");
                $("#id1").val(_id);
                $("#gig_title").val(_view_title);
                $("#gig_place").val(_view_place);
                $("#gig_date").val(_view_date);
                $("#gig_img1").prop("src", _view_img1);
                $("#gig_img2").prop("src", _view_img2);
                $("#gig_img3").prop("src", _view_img3);
                $("#gig_img4").prop("src", _view_img4);
                $("#gig_img5").prop("src", _view_img5);


            });
            $("img").each(function($index) {
                $(this).attr("onerror", "this.src=\"img/bg.png\";");
            });
        };
        //experience update
        $("#submit_gigexp").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id = $("#id1").val();
            var updategigster_title = $("#gig_title").val();
            var updategigster_place = $("#gig_place").val();
            var updategigster_date = $("#gig_date").val();
          if(updategigster_title== "" || updategigster_place=="" || updategigster_date=="" ){
              $(".msg_alert1").show();
          }else{
            $.ajax({
                url: "api/gigexperience_api.php",
                data: "action=update_gigexp&set_phone=" + login_phone + "&id=" + id + "&updategigster_title=" + updategigster_title + "&updategigster_place=" + updategigster_place + "&updategigster_date=" + updategigster_date + "&id=" + id,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    $(".msg_alert").show();
                }

            })
        }

        });
        //image upload
        $(".image_upload").on("change", function() {
            $("#loading1").show();
            var _this = $(this);
            var _id = _this.data("id");
            var _fd = new FormData();
            _fd.append("file", _this[0].files[0]);
            _fd.append("action", "imageupload");
            _fd.append("image_id", _id);
            //_fd.append("new_entry", "true");
            _fd.append("id", $("#id1").val());
            $.ajax({
                url: "http://paypassion.in/paypassion/api/imageupload_api.php",
                type: 'POST',
                data: _fd,
                async: false,
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.status == "success") {
                        $("#gig_img" + _id).attr("src", "img/" + data.response.toString());
                        $("#loading1").hide();
                    } else {
                        alert("Error uploading photo. Please refresh and try again.");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
        //image add
        $(".image_add").on("change", function() {
            $("#loading2").show();
            var _this = $(this);
            var _id = _this.data("id");
            var _fd = new FormData();
            _fd.append("file", _this[0].files[0]);
            _fd.append("action", "imageupload");
            _fd.append("image_id", _id);
            _fd.append("new_entry", "true");
            _fd.append("id", $("#id2").val());
            $.ajax({
                url: "http://paypassion.in/paypassion/api/imageupload_api.php",
                type: 'POST',
                data: _fd,
                async: false,
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.status == "success") {
                        $("#gig_add_img" + _id).attr("src", "img/" + data.response.toString());
                        $("#add_gig_img" + _id).val(data.response);
                        $("#loading2").hide();
                    } else {
                        alert("Error uploading photo. Please refresh and try again.");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
        //add experience
        $("#add_exp").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var gigster_id = window.localStorage.getItem('reg_phone');
            // This should also do
            var id = $("#id2").val();
            var gigster_title = $("#add_gig_title").val();
            var gigster_place = $("#add_gig_place").val();
            var gigster_date = $("#add_gig_date").val();
            var gigster_img1 = $("#add_gig_img1").val();
            var gigster_img2 = $("#add_gig_img2").val();
            var gigster_img3 = $("#add_gig_img3").val();
            var gigster_img4 = $("#add_gig_img4").val();
            var gigster_img5 = $("#add_gig_img5").val();
            if(gigster_title=="" || gigster_place=="" || gigster_date==""){
                $(".msg_alert1").show();
            }else{
            $.ajax({
                url: "api/gigexperience_api.php",
                data: "action=exp_insert&set_phone=" + login_phone + "&id=" + id + "&gigster_id=" + gigster_id + "&gigster_title=" + gigster_title + "&gigster_place=" + gigster_place + "&gigster_date=" + gigster_date + "&gigster_img1=" + gigster_img1 + "&gigster_img2=" + gigster_img2 + "&gigster_img3=" + gigster_img3 + "&gigster_img4=" + gigster_img4 + "&gigster_img5=" + gigster_img5,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    $(".msg_alert").show();
					deleteFunction();
                } else {
					
				}
				$("#add_gig_title").val("");
				$("#add_gig_place").val("");
				$("#add_gig_date").val("");
				$("#add_gig_img1").val("");
				$("#add_gig_img2").val("");
				$("#add_gig_img3").val("");
				$("#add_gig_img4").val("");
				$("#add_gig_img5").val("");
				$("#gig_add_img1").attr("src", "img/bg.png");
				$("#gig_add_img2").attr("src", "img/bg.png");
				$("#gig_add_img3").attr("src", "img/bg.png");
				$("#gig_add_img4").attr("src", "img/bg.png");
				$("#gig_add_img5").attr("src", "img/bg.png");
                console.log(data);
            });
        }
        });
        $("#next_exp").click(function() {
            $("#accOneColThree").hide();
            $("#accOneColFour").show();
        })
        //achievement_display
		function delachFunction(){
        var login_phone = window.localStorage.getItem('reg_phone');
        var e = "";
        var f = "";

        $.ajax({
            url: "api/gigachievement_api.php",
            data: "action=gigachievement&set_phone=" + login_phone,
            method: "POST",
            type: "POST",
            dataType: "json"
        }).done(function(data) {
            if (data.status == "success") {
                for (i = 0; i < data.response.disp.length; i++) {
                    e = data.response.disp[i];
                    f += "<tr><td class='text-center ach_id' style='display:none;'>" + e.id + "</td><td class='ach_view_id' style='display:none;'>" + e.view_id + "</td><td><span class='label label-success ach_view_title'>" + e.view_ach_title + "</span></td><td class='ach_view_place'>" + e.view_ach_place + "</td><td class='ach_view_date'>" + e.view_ach_date + "</td><td class='ach_view_img1'><img src='img/" + e.view_ach_img1 + "' height='50' width='50' /></td><td class='ach_view_img2'><img src='img/" + e.view_ach_img2 + "' height='50' width='50'/></td><td><button class='btn btn-default btn-rounded btn-sm edit_gigach' data-toggle='modal' data-target='#myModal5'><span class='fa fa-pencil'></span></button><button id='" + e.id + "' class='btn btn-danger btn-rounded btn-sm' data-toggle='modal' data-target='#myModal9' onClick='document.getElementById(\"id_delete2\").value = this.id;'><span class='fa fa-times'></span></button></td></tr>";
                }
            }
            $(".display_achievement").html(f);
            achieveFunction();

        });
		}
		delachFunction();
        //achievement edit
        function achieveFunction() {
            $(".edit_gigach").click(function() {
                var _id = $(this).parent().parent().find(".ach_id").html();
                var _view_id = $(this).parent().parent().find(".ach_view_id").html();
                var _view_ach_title = $(this).parent().parent().find(".ach_view_title").html();
                var _view_ach_place = $(this).parent().parent().find(".ach_view_place").html();
                var _view_ach_date = $(this).parent().parent().find(".ach_view_date").html();
                var _view_ach_img1 = $(this).parent().parent().find(".ach_view_img1").find("img").prop("src");
                var _view_ach_img2 = $(this).parent().parent().find(".ach_view_img2").find("img").prop("src");

                $("#id3").val(_id);
                $("#ach_title").val(_view_ach_title);
                $("#ach_place").val(_view_ach_place);
                $("#ach_date").val(_view_ach_date);
                $("#ach_img1").prop("src", _view_ach_img1);
                $("#ach_img2").prop("src", _view_ach_img2);



            });
            $("img").each(function($index) {
                $(this).attr("onerror", "this.src=\"img/bg.png\";");
            });
        };
        //achievement update
        $("#submit_gigach").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id = $("#id3").val();
            var updateach_title = $("#ach_title").val();
            var updateach_place = $("#ach_place").val();
            var updateach_date = $("#ach_date").val();
           if(updateach_title=="" || updateach_place=="" || updateach_date==""){
               $(".msg_alert1").show();
           }else{
            $.ajax({
                url: "api/gigachievement_api.php",
                data: "action=update_gigach&set_phone=" + login_phone + "&id=" + id + "&updateach_title=" + updateach_title + "&updateach_place=" + updateach_place + "&updateach_date=" + updateach_date + "&id=" + id,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    $(".msg_alert").show();
                }

            })
        }

        });
        //image upload achievement
        $(".image_upload_ach").on("change", function() {
            $("#loading3").show();
            var _this = $(this);
            var _id = _this.data("id");
            var _fd = new FormData();
            _fd.append("file", _this[0].files[0]);
            _fd.append("action", "imageupload_ach");
            _fd.append("image_id", _id);
            //_fd.append("new_entry", "true");
            _fd.append("id", $("#id3").val());
            $.ajax({
                url: "http://paypassion.in/paypassion/api/imageupload_ach_api.php",
                type: 'POST',
                data: _fd,
                async: false,
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.status == "success") {
                        $("#ach_img" + _id).attr("src", "img/" + data.response.toString());
                        $("#loading3").hide();
                    } else {
                        alert("Error uploading photo. Please refresh and try again.");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
        //image add achievement
        $(".image_add_ach").on("change", function() {
            $("#loading4").show();
            var _this = $(this);
            var _id = _this.data("id");
            var _fd = new FormData();
            _fd.append("file", _this[0].files[0]);
            _fd.append("action", "imageupload_ach");
            _fd.append("image_id", _id);
           // _fd.append("new_entry", "true");
            _fd.append("id", $("#id4").val());
            $.ajax({
                url: "http://paypassion.in/paypassion/api/imageupload_ach_api.php",
                type: 'POST',
                data: _fd,
                async: false,
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.status == "success") {
                        $("#add_ach_img" + _id).attr("src", "img/" + data.response.toString());
                        $("#ach_add_img" + _id).val(data.response);
                        $("#loading4").hide();
                    } else {
                        alert("Error uploading photo. Please refresh and try again.");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
        //add achievement
        $("#add_ach").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var gigster_id = window.localStorage.getItem('reg_phone');
            // This should also do
            var id = $("#id4").val();
            var ach_title = $("#add_ach_title").val();
            var ach_place = $("#add_ach_place").val();
            var ach_date = $("#add_ach_date").val();
            var ach_img1 = $("#ach_add_img1").val();
            var ach_img2 = $("#ach_add_img2").val();
            if(ach_title=="" || ach_place=="" || ach_date=="" ){
                $(".msg_alert1").show();
            }else{
            $.ajax({
                url: "api/gigachievement_api.php",
                data: "action=ach_insert&set_phone=" + login_phone + "&id=" + id + "&gigster_id=" + gigster_id + "&ach_title=" + ach_title + "&ach_place=" + ach_place + "&ach_date=" + ach_date + "&ach_img1=" + ach_img1 + "&ach_img2=" + ach_img2,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    $(".msg_alert").show();
					delachFunction();
                }else{
				
					}
				$("#add_ach_title").val("");
				$("#add_ach_place").val("");
				$("#add_ach_date").val("");
				$("#ach_add_img1").val("");
				$("#ach_add_img2").val("");
				$("#add_ach_img2").attr("src", "img/bg.png");
				$("#add_ach_img2").attr("src", "img/bg.png");
                console.log(data);
            });
        }

        });

        function addTag_2(tag) {
            console.log(tag);
            //setTimeout(function(){$(".tagsinput_2").val($(".tagsinput_2").val()+","+tag);},500);
        };

        function removeTag_2(tag) {
            var _a = $(".tagsinput_2").val().split(",");
            var _x = (_a.indexOf(tag) > -1) ? (_a.indexOf(tag)) : 99999;
            _a.splice(_x, 1);
            $(".tagsinput_2").val(_a.join(","));
        };
        if ($(".tagsinput_2").length > 0) {
            var _this = $(".tagsinput_2");
            if ($(_this).data("placeholder") != '') {
                var dt = $(_this).data("placeholder");
            } else
                var dt = 'add a tag';
            $(_this).tagsInput({
                width: '100%',
                height: 'auto',
                defaultText: dt,
                onAddTag: addTag_2,
                onRemoveTag: removeTag_2
            });
        }
//delete for giginfo
        $("#delete").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id_delete = $("#id_delete").val();
            $.ajax({
                url: "api/delete_api.php",
                data: "action=DELETE&set_phone=" + login_phone + "&id_delete=" + id_delete,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    addFunction();
                }
                console.log(data);
            });
        });

//delete for experience 
        $("#delete1").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id_delete1 = $("#id_delete1").val();
            $.ajax({
                url: "api/delete_api.php",
                data: "action=DELETE_EXPERIENCE&set_phone=" + login_phone + "&id_delete1=" + id_delete1,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    deleteFunction();
                }
                console.log(data);
            });
        });
//delete for achievement 
        $("#delete2").click(function() {
            var login_phone = window.localStorage.getItem('reg_phone');
            var id_delete2 = $("#id_delete2").val();
            $.ajax({
                url: "api/delete_api.php",
                data: "action=DELETE_ACHIEVEMENT&set_phone=" + login_phone + "&id_delete2=" + id_delete2,
                method: "POST",
                type: "POST",
                dataType: "json"
            }).done(function(data) {
                if (data.status == "success") {
                    delachFunction();
                }
                console.log(data);
            });
        });
			if(window.localStorage.getItem('reg_phone')){
		
			}else{
			window.location.assign("register.php");
			}
        //image upload
        $(".image_profile").on("change", function() {
            $("#loading5").show();
            var _this = $(this);
            var _id = _this.data("id");
            var _fd = new FormData();
            _fd.append("file", _this[0].files[0]);
            _fd.append("action", "imageprofile");
            _fd.append("image_id", _id);
            //_fd.append("new_entry", "true");
            _fd.append("set_phone", window.localStorage.getItem('reg_phone'));
            $.ajax({
                url: "http://paypassion.in/paypassion/api/profileimage_api.php",
                type: 'POST',
                data: _fd,
                async: false,
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    console.log(data);
                    if (data.status == "success") {
                        $("#add_image_profile").attr("src", "img_profile/" + data.response.toString());
                        $(".image_profile").attr("src", "img_profile/" + data.response.toString());
                        setTimeout(function(){
                            $("#loading5").hide();
                            $("#myModal10").modal("hide");
                        }, 500);
                    } else {
                        alert("Error uploading photo. Please refresh and try again.");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>
<?php
include 'footer.php';
?>