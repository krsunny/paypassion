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
			case "giginfo":
                if(isset($_POST['set_phone'])){
                    $set_phone=$_POST['set_phone'];
                    $set_view = mysqli_query($con, "select * from `gig_info` where `status`!='deleted' and `gigster_id`='$set_phone' ORDER BY `timestamp`");
                    $disp=array();
                    $i=0;
                    while($row = mysqli_fetch_array($set_view)){
                        $id= $row['id'];
                        $view_id = $row['gigster_id']; 
                        $view_area = $row['area'];
                        $view_level = $row['level'];
                        $view_noofgigs = $row['no_of_gigs'];
                        $view_genre = $row['genre'];
                        $view_keywords = $row['keywords'];
                        $disp[$i]=array("id"=>$id, "view_id" => $view_id,"view_area" => $view_area,"view_level" => $view_level,"view_noofgigs" => $view_noofgigs,"view_genre" =>$view_genre,"view_keywords" => $view_keywords);
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
                case "update_giginfo":
				//set_phone=" + login_phone + "&id=" + id + "&updategigster_area=" + updategigster_area + "&updategigster_level=" + updategigster_level + "&updategigster_noofgigs=" + updategigster_noofgigs + "&updategigster_genre=" + updategigster_genre + "&updategigster_keywords=" + updategigster_keywords,
                if(isset($_POST['set_phone']) && isset($_POST['updategigster_area']) && isset($_POST['updategigster_level']) && isset($_POST['updategigster_noofgigs']) && isset($_POST['updategigster_genre']) && isset($_POST['updategigster_keywords'])&& isset($_POST['id'])){
                    $set_phone=$_POST['set_phone'];
                    $id=$_POST['id'];
                    $updategigster_id=$_POST['updategigster_id'];
                    $updategigster_area=$_POST['updategigster_area'];
                    $updategigster_level=$_POST['updategigster_level'];
                    $updategigster_noofgigs=$_POST['updategigster_noofgigs'];
                    $updategigster_genre=$_POST['updategigster_genre'];
                    $updategigster_keywords=$_POST['updategigster_keywords'];
                   $t= mysqli_query($con, "Update gig_info set area='$updategigster_area',level='$updategigster_level',no_of_gigs='$updategigster_noofgigs',genre='$updategigster_genre',keywords='$updategigster_keywords' where id='$id'");
                   
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
                case "giginfo_insert":					
							if(isset($_POST['set_phone']) && isset($_POST['gigster_id']) && isset($_POST['gigster_area']) && isset($_POST['gigster_level']) && isset($_POST['gigster_noofgigs']) && isset($_POST['gigster_genre']) && isset($_POST['gigster_keywords'])) {
								   $set_phone=$_POST['set_phone'];
								   $gigster_id=$_POST['gigster_id'];
								   $gigster_area=$_POST['gigster_area'];
								   $gigster_level=$_POST['gigster_level'];
								   $gigster_noofgigs=$_POST['gigster_noofgigs'];
								   $gigster_genre=$_POST['gigster_genre'];
								   $gigster_keywords=$_POST['gigster_keywords'];
								 
								  
								   $insert=mysqli_query($con,"INSERT INTO `gig_info` (`id`,`gigster_id`,`area`,`level`,`no_of_gigs`,`genre`,`keywords`,`status`) VALUES ('','$gigster_id','$gigster_area','$gigster_level','$gigster_noofgigs','$gigster_genre','$gigster_keywords','active')");
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