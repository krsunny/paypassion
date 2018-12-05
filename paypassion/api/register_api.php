<?php
   date_default_timezone_set("Asia/Kolkata");
   header("Access-Control-Allow-Origin: *");
    ob_start();
    include 'connect.php';
    include 'sms.php';
    //post method
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        //action variable isset
        if (isset($_POST["action"])){
            //ACTION to be performed on the DB.
            $action = $_POST["action"]; 
            switch($action){
                //case for registration
                case "register":
                //if for setting a post variable for phone
                    if(isset($_POST['reg_phone'])){
                    //assigning post variable to php variables
                    $reg_name=$_POST['reg_name'];
                    $reg_phone=$_POST['reg_phone'];
                    $reg_email=$_POST['reg_email'];
                    $reg_password = $_POST['reg_password'];
                    //checking if exists for phone
                    $phone_query = mysqli_query($con, "select id from gigster_login where phone='$reg_phone'");
                    $phone_exists = mysqli_num_rows($phone_query);
                    //checking if exists for email
                    $email_query = mysqli_query($con, "select id from gigster_login where email='$reg_email'");
                    $email_exists = mysqli_num_rows($email_query);
                    //if phone exists error message
                    if($phone_exists==1){
                            $status = "failure";
                            $response = null;
                            $message = "Phone Number Exist";
                    }
                    //if email exists error message
                    else if($email_exists==1){
                            $status = "failure";
                            $response = null;
                            $message = "Email Exist";
                    }
                    //else insert the query and display success message
                    else{
						 //function for a random string generation
					function generateRandomString($length = 6) {
                            $characters = '123456789';
                            $charactersLength = strlen($characters);
                            $randomString = '';
                            for ($i = 0; $i < $length; $i++) {
                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                            }
                            return $randomString;
                        }
                        $rangen=generateRandomString();
                        $coded=$rangen;
                        $sms_status = sendSMS($reg_phone, "Your PayPassion verification code is " . $coded);
                        mysqli_query($con, "INSERT INTO `gigster_login`(`id`, `name`, `phone`, `email`, `type`, `dob`, `gender`, `photo`, `address`, `pincode`, `district`, `state`, `country`, `about`, `password`, `otp`, `status`, `timestamp`) VALUES ('','$reg_name','$reg_phone','$reg_email','','','','','','','','','','','$reg_password','$coded','','')");
					
                   
                            $status = "success";
                            $response =array("reg_name"=>$reg_name,"reg_email"=>$reg_email,"reg_phone"=>$reg_phone, "sms_status"=>$sms_status);
                            $message = "phone_number and password is correct";
                        // if there is not output from the sql
                    }
					}
					//if the post variable is not set
					else{
						$status = "failure";
                        $response = null;
						$message = " Post variable not submitted";
					}
                    
                break;
            // case ends and default begin
			case "otp_verify":
			if(isset($_POST['otp_phone']) && isset($_POST['otp'])){
				$otp_phone = $_POST['otp_phone'];
				$otp = $_POST['otp'];
				$check_otp = mysqli_query($con, "select id from gigster_login where phone='$otp_phone' and otp='$otp'");
				$check_otp_count= mysqli_num_rows($check_otp);
				if($check_otp_count==1){
					mysqli_query($con, "update gigster_login set `status`='verified' where phone='$otp_phone' and otp='$otp'");
					$status = "success";
					$response = array("otp_phone"=>$otp_phone);
					$message = "otp verified successfully";
				}
				else{
					$status = "failure";
					$response = null;
					$message = "otp does not match";
				}
				}
			break;
			case 'resend_otp':
			if(isset($_POST['resend_phone'])){
					$resend_phone = $_POST['resend_phone'];
				 //function for a random string generation
					function generateRandomString($length = 6) {
                            $characters = '123456789';
                            $charactersLength = strlen($characters);
                            $randomString = '';
                            for ($i = 0; $i < $length; $i++) {
                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                            }
                            return $randomString;
                        }
                        $rangen=generateRandomString();
                        $phoned='91'.$resend_phone;
                        $coded=$rangen;
                        // Textlocal account details
                        $username = 'info@a1sports.in';
                        $pass = 'Manu.8080';
                        
                        // Message details
                        $numbers = $phoned;
                        $sender = urlencode('AONESP');
                        $message = "$coded is your verification code for A1sports";
                        
                        
                        // Prepare data for POST request
                        $data = array('username' => $username, 'password' => $pass, 'numbers' => $numbers, "sender" => $sender, "message" => $message, "test" => false);
                        
                        // Send the POST request with cURL
                        $ch = curl_init('http://api.textlocal.in/send/');
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($ch);
                        curl_close($ch);
						mysqli_query($con, "update gigster_login set `otp`='$coded' where phone='$resend_phone'");
							$status = "success";
							$response = null;
							$message = "Resent otp successfully";
			}
			else{
				 $status = "failure";
                $response = null;
                $message = "Post not set";
			}
			break;
            default:
                $status = "failure";
                $response = null;
                $message = "Action entered is wrong.";
                break;
            }
        //posting action if loop ends and else begins
        } else { 
            $status = "failure";
            $response = null;
            $message = "its not posting actions.";

            }
    //server request if closes and else starts
    } else {
        $status = "failure";
        $response = null;
        $message = "failed request to the server";
        }
    //fomat of the data and json encoding    
    $data = array("status"=>$status, "message"=>$message, "response"=>$response);
    $data = json_encode($data);
    ob_end_clean();
    echo $data;
	
?>