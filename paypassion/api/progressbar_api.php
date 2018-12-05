<?php
	header("Access-Control-Allow-Origin: *");
	//include file
	include 'connect.php';
	//if post method begins
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST["action"])) {
			//ACTION to be performed on the DB.
			$action = $_POST["action"];
			//switch begins
			switch ($action) {
				case "gig_info":
					if (isset($_POST['set_phone'])) {
						$set_phone   = $_POST['set_phone'];
						//displaying the addrses table 
						mysqli_query($con, select  (case when(gig_info.area=" ") then 0 else 1 end) as p15, (case when(gig_info.level=" ") then 0 else 1 end) as p16, (case when(gig_info.no_of_gigs=" ") then 0 else 1 end) as p17, (case when(gig_info.genre=" ") then 0 else 1 end) as p18, (case when(gig_info.keywords=" ") then 0 else 1 end) as p19
                        from gig_info where gig_info.gigster_id='$set_phone');
						
					} else {
						$status   = "failure";
						$response = NULL;
						$message  = "ID variable missing.";
					}
					break;
					
				default:
					//if any cases not work then action entered is wrong.
					$status   = "failure";
					$response = null;
					$message  = "Action enetered is wrong.";
					break;
			}
		} else {
			// if server is not posting anything.
			$status   = "failure";
			$response = null;
			$message  = "its not posting actions.";
		}
	} else {
		$status   = "failure";
		$response = null;
		$message  = "failed request to the server";
	}
	$data = array(
		"status" => $status,
		"message" => $message,
		"response" => $response
	);
	$data = json_encode($data);
	echo $data;
?>