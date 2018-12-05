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
				case "DELETE":
					if (isset($_POST['id_delete'])) {
						$id   = $_POST['id_delete'];
						//displaying the addrses table 
						$read = mysqli_query($con, "select * from gig_info where (`status`!='deleted' OR `status` IS NULL) and `id`='$id'");
						if (mysqli_num_rows($read) > 0) {
							//updating the address table with status deleted.
							$update   = mysqli_query($con, "UPDATE `gig_info` SET `status`='deleted' WHERE id='$id'");
							$status   = "success";
							$message  = "Deleted";
							$response = $update;
						} else {
							$status   = "failure";
							$response = NULL;
							$message  = "Gig does not exist.";
						}
					} else {
						$status   = "failure";
						$response = NULL;
						$message  = "ID variable missing.";
					}
					break;
					case "DELETE_EXPERIENCE":
					if (isset($_POST['id_delete1'])) {
						$id   = $_POST['id_delete1'];
						//displaying the addrses table 
						$read = mysqli_query($con, "select * from experience where (`status`!='deleted' OR `status` IS NULL) and `id`='$id'");
						if (mysqli_num_rows($read) > 0) {
							//updating the address table with status deleted.
							$update   = mysqli_query($con, "UPDATE `experience` SET `status`='deleted' WHERE id='$id'");
							$status   = "success";
							$message  = "Deleted";
							$response = $update;
						} else {
							$status   = "failure";
							$response = NULL;
							$message  = "Gig does not exist.";
						}
					} else {
						$status   = "failure";
						$response = NULL;
						$message  = "ID variable missing.";
					}
					break;
					case "DELETE_ACHIEVEMENT":
					if (isset($_POST['id_delete2'])) {
						$id   = $_POST['id_delete2'];
						//displaying the addrses table 
						$read = mysqli_query($con, "select * from acheivements where (`status`!='deleted' OR `status` IS NULL) and `id`='$id'");
						if (mysqli_num_rows($read) > 0) {
							//updating the address table with status deleted.
							$update   = mysqli_query($con, "UPDATE `acheivements` SET `status`='deleted' WHERE id='$id'");
							$status   = "success";
							$message  = "Deleted";
							$response = $update;
						} else {
							$status   = "failure";
							$response = NULL;
							$message  = "Gig does not exist.";
						}
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