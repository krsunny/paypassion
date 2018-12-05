<?php
date_default_timezone_set("Asia/Kolkata");
header("Access-Control-Allow-Origin: *");
ob_start();
include 'connect.php';
include '../sms.php';
// post method

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	// action variable isset
	if (isset($_POST["action"])) {
		// ACTION to be performed on the DB.
		$action = $_POST["action"];
		switch ($action) {
			// case for registration
		case "view_setting":
                if(isset($_POST['set_phone'])){
                    $set_phone=$_POST['set_phone'];
                    $set_view = mysqli_query($con, "select * from gigster_login where phone='$set_phone'");
                    while($row = mysqli_fetch_array($set_view)){
                        $view_name = $row['name']; 
                        $view_phone = $row['phone'];
                        $view_email = $row['email'];
                        $view_password = $row['password'];
                    }
                     $status = "success";
                    $response =array("view_phone" => $view_phone,"view_name" => $view_name,"view_email" => $view_email,"view_password" => $view_password);
                    $message = "Settings retrived";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
                case "update_name":
                if(isset($_POST['set_phone']) && isset($_POST['updatename'])){
                    $set_phone=$_POST['set_phone'];
                    $updatename=$_POST['updatename'];
                    mysqli_query($con, "Update gigster_login set name='$updatename' where phone='$set_phone'");
                   
                     $status = "success";
                    $response =null;
                    $message = "Name changed succesfully";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
                case "otp":
                if(isset($_POST['set_phone']) && isset($_POST['updatephone'])){
                    $set_phone=$_POST['set_phone'];
                    $updatephone=$_POST['updatephone'];
                    function generateRandomString($length = 6){
                        $characters = '123456789';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString.= $characters[rand(0, $charactersLength - 1) ];
                        }
                        return $randomString;
                    }
                    $q=mysqli_query($con, "SELECT * FROM gigster_login where phone='$updatephone'");
                    if(mysqli_num_rows($q)>0){
                        $status = "failure";
                        $response =null;
                        $message = "Phone Number Exist"; 
                    } else {
                        $rangen = generateRandomString();
                        mysqli_query($con, "update gigster_login set `status`='$updatephone', otp='$rangen' where phone='$set_phone'");
                        $t = sendSMS($updatephone, $rangen." is your OTP for Paypassion.");
                        $status = "success";
                        $response = $t;
                        $message = "otp sent successfully";
                    }
                } else {
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
            case "otp_confirm":
                if(isset($_POST['otp']) && isset($_POST['updatephone'])){
                    $otp=$_POST['otp'];
                    $updatephone=$_POST['updatephone'];
                    $c=mysqli_query($con, "SELECT `status` FROM gigster_login where otp='$otp'");
                    while($row = mysqli_fetch_array($c)){
                        $status= $row['status'];
                    }
                     mysqli_query($con, "update gigster_login set phone ='$status', `status`='verified' where otp='$otp'");
                        $status = "success";
                        $response =null;
                        $message = "Otp Verified"; 
                        }
                    
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
                 case "update_email":
                if(isset($_POST['set_phone']) && isset($_POST['email'])){
                    $set_phone=$_POST['set_phone'];
                    $email=$_POST['email'];
                    $d=mysqli_query($con, "SELECT * FROM gigster_login where email='$email'");
                   if(mysqli_num_rows($d)>0){
                        $status = "failure";
                        $response =null;
                        $message = "Email Exist"; 
                        }
                    else{
                     mysqli_query($con, "update gigster_login set email='$email' where phone='$set_phone'");
                        $status = "success";
                        $response =null;
                        $message = "Email Updated succesfully"; 
                        }
                }
                    
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
                }
			
			break;
                case "update_password":
                if(isset($_POST['set_phone']) && isset($_POST['oldpassword']) && isset($_POST['newpassword'])){
                    $set_phone=$_POST['set_phone'];
                    $oldpassword=$_POST['oldpassword'];
                    $newpassword=$_POST['newpassword'];
                    $e=mysqli_query($con, "SELECT * FROM gigster_login where password='$oldpassword'");
                   if(mysqli_num_rows($e)>0){
                           mysqli_query($con, "update gigster_login set password='$newpassword' where phone='$set_phone'");
                        $status = "success";
                        $response =null;
                        $message = "password Updated succesfully"; 
                        }
                    else{
                  
                     $status = "failure";
                        $response =null;
                        $message = "wrong old password";
                }
                }
                    
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Phone number is not set";
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