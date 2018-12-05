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
			case "gigachievement":
                if(isset($_POST['set_phone'])){
                    $set_phone=$_POST['set_phone'];
                    $set_view = mysqli_query($con, "select * from `acheivements` where `status`!='deleted' and `gigster_id`='$set_phone' ORDER BY `timestamp`");
                    $disp=array();
                    $i=0;
                    while($row = mysqli_fetch_array($set_view)){
                        $id= $row['id'];
                        $view_id = $row['gigster_id']; 
                        $view_ach_title = $row['ach_title'];
                        $view_ach_place = $row['ach_place'];
                        $view_ach_date = $row['ach_date'];
                        $view_ach_img1 = $row['ach_img1'];
                        $view_ach_img2 = $row['ach_img2'];
                        $disp[$i]=array("id"=>$id, "view_id" => $view_id,"view_ach_title" => $view_ach_title,"view_ach_place" => $view_ach_place,"view_ach_date" => $view_ach_date,"view_ach_img1" =>$view_ach_img1,"view_ach_img2" => $view_ach_img2);
                        $i++;
                    }
                     $status = "success";
                    $response =array('disp'=>$disp);
                    $message = "Achievements retrieved.";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
			 case "update_gigach":
                if(isset($_POST['set_phone']) &&  isset($_POST['updateach_title']) && isset($_POST['updateach_place']) && isset($_POST['updateach_date']) && isset($_POST['id'])){
                    $id=$_POST['id'];
                    $set_phone=$_POST['set_phone'];
                    $updateach_title=$_POST['updateach_title'];
                    $updateach_place=$_POST['updateach_place'];
                    $updateach_date=$_POST['updateach_date'];
                    /*$updategigster_img1=$_POST['updategigster_img1'];
                    $updategigster_img2=$_POST['updategigster_img2'];
                    $updategigster_img3=$_POST['updategigster_img3'];
                    $updategigster_img4=$_POST['updategigster_img4'];
                    $updategigster_img5=$_POST['updategigster_img5'];*/
                   $t= mysqli_query($con, "Update `acheivements` set ach_title='$updateach_title',ach_place='$updateach_place',ach_date='$updateach_date' where id='$id'");
                   
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
			case "ach_insert":					
							if(isset($_POST['set_phone']) && isset($_POST['gigster_id']) && isset($_POST['ach_title']) && isset($_POST['ach_place']) && isset($_POST['ach_date']) && isset($_POST['ach_img1']) && isset($_POST['ach_img2'])) {
								   $set_phone=$_POST['set_phone'];
								   $id=$_POST['id'];
								   $gigster_id=$_POST['gigster_id'];
								   $ach_title=$_POST['ach_title'];
								   $ach_place=$_POST['ach_place'];
								   $ach_date=$_POST['ach_date'];
								   $ach_img1=$_POST['ach_img1'];
								   $ach_img2=$_POST['ach_img2'];
						
								   $insert=mysqli_query($con,"INSERT INTO `acheivements` (`id`,`gigster_id`,`ach_title`,`ach_place`,`ach_date`,`ach_img1`,`ach_img2`,`status`) VALUES ('','$gigster_id','$ach_title','$ach_place','$ach_date','$ach_img1','$ach_img2','')");
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