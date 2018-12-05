<?php
date_default_timezone_set("Asia/Kolkata");
header("Access-Control-Allow-Origin: *");
ob_start();
include 'connect.php';
include 'sms.php';

// post method
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// action variable isset
	if (isset($_POST["action"])) {
		// ACTION to be performed on the DB.
		$action = $_POST["action"];
		switch ($action) {
			// case for registration
		case "login":
			// if for setting a post variable for phone
			if (isset($_POST['login_phone']) && isset($_POST['login_password'])) {
				// assigning post variable to php variables
				$login_phone = $_POST['login_phone'];
				$login_password = $_POST['login_password'];
				// checking if exists for phone
				$login_query = mysqli_query($con, "select id,phone,email,`status` from gigster_login where phone='$login_phone' and password='$login_password' and `status`='verified'");
				while ($row = mysqli_fetch_array($login_query)) {
					$view_phone = $row['phone'];
					$view_name = $row['name'];
					$view_email = $row['email'];
					$view_status = $row['status'];
				}
				if (mysqli_num_rows($login_query) == 1) {
					$status = "success";
					$response = array(
						"view_phone" => $view_phone,
						"view_name" => $view_name,
						"view_email" => $view_email
					);
					$message = "login successfully";
				} elseif ($view_status == '') {
                    $login_query = mysqli_query($con, "SELECT id,phone,email,`status` from gigster_login where phone='$login_phone' and password='$login_password'");
                    while ($row = mysqli_fetch_array($login_query)) {
                        $view_phone = $row['phone'];
                        $view_name = $row['name'];
                        $view_email = $row['email'];
                        $view_status = $row['status'];
                    }
					function generateRandomString($length = 6){
						$characters = '123456789';
						$charactersLength = strlen($characters);
						$randomString = '';
						for ($i = 0; $i < $length; $i++) {
							$randomString.= $characters[rand(0, $charactersLength - 1) ];
						}
						return $randomString;
					}
					$rangen = generateRandomString();
					$phoned = '91' . $view_phone;
					$coded = $rangen;
					// Textlocal account details
					$username = 'info@a1sports.in';
					$pass = 'Manu.8080';
					// Message details
					$numbers = $phoned;
					$sender = urlencode('AONESP');
					$message = "$coded is your verification code for A1sports";
					// Prepare data for POST request
					$data = array(
						'username' => $username,
						'password' => $pass,
						'numbers' => $numbers,
						"sender" => $sender,
						"message" => $message,
						"test" => false
					);
					// Send the POST request with cURL
					$ch = curl_init('http://api.textlocal.in/send/');
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$resp = curl_exec($ch);
					curl_close($ch);
					mysqli_query($con, "UPDATE gigster_login set otp='$coded' where phone='$view_phone'");
					$status = "failure";
					$response = null;
					$message = "user not verified";
				}
				else {
					$status = "failure";
					$response = null;
					$message = "invalid credentials";
				}
				// else insert the query and display success message
			}
			// if the post variable is not set
			else {
				$status = "failure";
				$response = null;
				$message = " Post variable not submitted";
			}
			break;

		case "forgot":
			// if for setting a post variable for phone
			if (isset($_POST['forgot_phone'])) {
				// assigning post variable to php variables
				$forgot_phone = $_POST['forgot_phone'];
				$forgot_query = mysqli_query($con, "select id,phone from gigster_login where phone='$forgot_phone'");
				while ($row = mysqli_fetch_array($forgot_query)) {
					$forgot_phn = $row['phone'];
				}
				if (mysqli_num_rows($forgot_query) == 1) {
					function generateRandomString($length = 6)
					{
						$characters = '123456789';
						$charactersLength = strlen($characters);
						$randomString = '';
						for ($i = 0; $i < $length; $i++) {
							$randomString.= $characters[rand(0, $charactersLength - 1) ];
						}
						return $randomString;
					}
					$rangen = generateRandomString();
					$coded = $rangen;
					 $sms_status = sendSMS($forgot_phone, "Your one time password is " . $coded);
					mysqli_query($con, "update gigster_login set otp='$coded' where phone='$forgot_phone'");
					$status = "success";
					$response = array(
						"forgot_phn" => $forgot_phn, "sms_status" => $sms_status
					);
					$message = "Phone Exists";
				}
				// if phone exists error message
				else {
					$status = "failure";
					$response = null;
					$message = "phone does not exists";
				}
				// else insert the query and display success message
			}
			// if the post variable is not set
			else {
				$status = "failure";
				$response = null;
				$message = " Post variable not submitted.";
			}
			break;

		case "reset_password":
			if (isset($_POST['forgot_phone']) && isset($_POST['forgot_otp']) && isset($_POST['forgot_password'])) {
				$forgot_phone = $_POST['forgot_phone'];
				$forgot_otp = $_POST['forgot_otp'];
				$forgot_password = $_POST['forgot_password'];
				$check_otp = mysqli_query($con, "select id from gigster_login where phone='$forgot_phone' and otp='$forgot_otp'");
				$check_otp_count = mysqli_num_rows($check_otp);
				if ($check_otp_count == 1) {
					mysqli_query($con, "update gigster_login set `password`='$forgot_password' where phone='$forgot_phone' and otp='$forgot_otp'");
					$status = "success";
					$response = array(
						"forgot_phone" => $forgot_phone
					);
					$message = "password changed successfully";
				}
				else {
					$status = "failure";
					$response = null;
					$message = "otp does not match";
				}
			}
			break;

		case "otp_verify":
			if (isset($_POST['otp_phone']) && isset($_POST['otp'])) {
				$otp_phone = $_POST['otp_phone'];
				$otp = $_POST['otp'];
				$check_otp = mysqli_query($con, "select id from gigster_login where phone='$otp_phone' and otp='$otp'");
				$check_otp_count = mysqli_num_rows($check_otp);
				if ($check_otp_count == 1) {
					mysqli_query($con, "update gigster_login set `status`='verified' where phone='$otp_phone' and otp='$otp'");
					$status = "success";
					$response = array(
						"otp_phone" => $otp_phone
					);
					$message = "otp verified successfully";
				}
				else {
					$status = "failure";
					$response = null;
					$message = "otp does not match";
				}
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