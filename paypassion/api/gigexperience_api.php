<?php
date_default_timezone_set("Asia/Kolkata");
header("Access-Control-Allow-Origin: *");
ob_start();
include 'connect.php';

// post method
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// action variable isset
	if (isset($_POST["action"])) {
		// ACTION to be performed on the DB.
		$action = $_POST["action"];
		switch ($action) {
			// case for registration
			case "gigexperience":
                if(isset($_POST['set_phone'])){
                    $set_phone=$_POST['set_phone'];
                    $set_view = mysqli_query($con, "select * from `experience` where `status`!='deleted' and `gigster_id`='$set_phone' ORDER BY `timestamp`");
                    $disp=array();
                    $i=0;
                    while($row = mysqli_fetch_array($set_view)){
                        $id= $row['id'];
                        $view_id = $row['gigster_id']; 
                        $view_title = $row['gig_title'];
                        $view_place = $row['gig_place'];
                        $view_date = $row['gig_date'];
                        $view_img1 = $row['gig_img1'];
                        $view_img2 = $row['gig_img2'];
                        $view_img3 = $row['gig_img3'];
                        $view_img4 = $row['gig_img4'];
                        $view_img5 = $row['gig_img5'];
                        $disp[$i]=array("id"=>$id, "view_id" => $view_id,"view_title" => $view_title,"view_place" => $view_place,"view_date" => $view_date,"view_img1" =>$view_img1,"view_img2" => $view_img2,"view_img3" => $view_img3,"view_img4" => $view_img4,"view_img5" => $view_img5);
                        $i++;
                    }
                     $status = "success";
                    $response =array('disp'=>$disp);
                    $message = "Settings retrived";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
               
                case "update_gigexp":
                if(isset($_POST['set_phone']) &&  isset($_POST['updategigster_title']) && isset($_POST['updategigster_place']) && isset($_POST['updategigster_date']) && isset($_POST['id'])){
                    $id=$_POST['id'];
                    $set_phone=$_POST['set_phone'];
                    $updategigster_id=$_POST['updategigster_id'];
                    $updategigster_title=$_POST['updategigster_title'];
                    $updategigster_place=$_POST['updategigster_place'];
                    $updategigster_date=$_POST['updategigster_date'];
                    /*$updategigster_img1=$_POST['updategigster_img1'];
                    $updategigster_img2=$_POST['updategigster_img2'];
                    $updategigster_img3=$_POST['updategigster_img3'];
                    $updategigster_img4=$_POST['updategigster_img4'];
                    $updategigster_img5=$_POST['updategigster_img5'];*/
                   $t= mysqli_query($con, "Update experience set gig_title='$updategigster_title',gig_place='$updategigster_place',gig_date='$updategigster_date' where id='$id'");
                   
                     $status = "success";
                    $response =$t;
                    $message = "details updated succesfully";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
			case "exp_insert":					
							if(isset($_POST['set_phone']) && isset($_POST['gigster_id']) && isset($_POST['gigster_title']) && isset($_POST['gigster_place']) && isset($_POST['gigster_date']) && isset($_POST['gigster_img1']) && isset($_POST['gigster_img2']) && isset($_POST['gigster_img3']) && isset($_POST['gigster_img4']) && isset($_POST['gigster_img5']) && isset($_POST['id'])) {
								   $set_phone=$_POST['set_phone'];
								   $id=$_POST['id'];
								   $gigster_id=$_POST['gigster_id'];
								   $gigster_title=$_POST['gigster_title'];
								   $gigster_place=$_POST['gigster_place'];
								   $gigster_date=$_POST['gigster_date'];
								   $gigster_img1=$_POST['gigster_img1'];
								   $gigster_img2=$_POST['gigster_img2'];
								   $gigster_img3=$_POST['gigster_img3'];
								   $gigster_img4=$_POST['gigster_img4'];
								   $gigster_img5=$_POST['gigster_img5'];
								 
								  
								   $insert=mysqli_query($con,"INSERT INTO `experience` (`id`,`gigster_id`,`gig_title`,`gig_place`,`gig_date`,`gig_img1`,`gig_img2`,`gig_img3`,`gig_img4`,`gig_img5`,`status`) VALUES ('','$gigster_id','$gigster_title','$gigster_place','$gigster_date','$gigster_img1','$gigster_img2','$gigster_img3','$gigster_img4','$gigster_img5','')");
											$status = "success";
											$response = array('insert'=>$insert);
											$message =  "Data is inserted into table.";
							} else {
											$status = "failure";
											$response = null ;
											$message =  "Data is not inserted.";			
									}
						break;
               
		default:
			$status = "failure";
			$response = null;
			$message = "Action entered is wrong.";
			break;
		}
		// posting action if loop ends and else begins
	}
	else {
		$status = "failure";
		$response = null;
		$message = "its not posting actions.";
	}
	// server request if closes and else starts
}
else {
	$status = "failure";
	$response = null;
	$message = "failed request to the server";
}
// fomat of the data and json encoding
$data = array(
	"status" => $status,
	"message" => $message,
	"response" => $response
);
$data = json_encode($data);
ob_end_clean();
echo $data;
?>