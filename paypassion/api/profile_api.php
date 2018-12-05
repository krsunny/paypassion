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
		case "profile_details":
                if(isset($_POST['set_phone'])){
                    $set_phone=$_POST['set_phone'];
                    $set_view = mysqli_query($con, "select * from gigster_login where `phone`='$set_phone'");
                    while($row = mysqli_fetch_array($set_view)){
                        $view_type = $row['type']; 
                        $view_dob = $row['dob'];
                        $view_gender = $row['gender'];
                        $view_address = $row['address'];
                        $view_pincode = $row['pincode'];
                        $view_district = $row['district'];
                        $view_state = $row['state'];
                        $view_country = $row['country'];
                        $view_about = $row['about'];
                        $view_name = $row['name'];
                        $view_photo = $row['photo'];
                        $view_tagline = $row['tagline'];
                        $view_phone = $row['phone'];
                        $view_email = $row['email'];
                        
                        $display=mysqli_query($con,"select ((((select (case when(gigster_login.name='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."')+(select (case when(gigster_login.tagline='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."' )+ (select (case when(gigster_login.phone='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."')+(select (case when(gigster_login.email='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."')+ (select (case when(gigster_login.type='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."')+(select (case when(gigster_login.dob='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.gender='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.photo='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.address='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.pincode='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."')+(select (case when(gigster_login.district='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.state='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."') +(select (case when(gigster_login.country='') then 0 else 1 end) from gigster_login where gigster_login.phone='".$set_phone."') +(select(case when(gigster_login.about='') then 0 else 1 end)from gigster_login where gigster_login.phone='".$set_phone."'))/14)*100) as per from gigster_login, gig_info, acheivements, experience  limit 1 ");
                        if(mysqli_num_rows($display)>0){
                            while($row=mysqli_fetch_array($display)){
                                $percent=$row['per'];
                            }
                        }
                    }
                     $status = "success";
                    $response =array("view_type" => $view_type,"view_dob" => $view_dob,"view_gender" => $view_gender,"view_address" => $view_address,"view_pincode" =>$view_pincode,"view_district" => $view_district,"view_state" => $view_state,"view_country" => $view_country,"view_about" => $view_about,"view_name" => $view_name,"view_photo" => $view_photo,"view_tagline" => $view_tagline,"view_phone"=> $view_phone,"view_email"=>$view_email,"percent"=>$percent);
                    $message = "Gigster Profile retrieved.";
                }
                else{
                    $status = "failure";
                    $response = null;
                    $message = "Missing Gigster ID.";
                }
			
			break;
                case "update_details":
                if(isset($_POST['set_phone']) && isset($_POST['updatetype']) && isset($_POST['updatedob']) && isset($_POST['updategender']) && isset($_POST['updateaddress']) && isset($_POST['updatepincode']) && isset($_POST['updatedistrict']) && isset($_POST['updatestate']) && isset($_POST['updatecountry']) && isset($_POST['updateabout'])&& isset($_POST['updatetagline'])){
                    $set_phone=$_POST['set_phone'];
                    $updatetype=$_POST['updatetype'];
                    $updatedob=$_POST['updatedob'];
                    $updategender=$_POST['updategender'];
                    $updateaddress=$_POST['updateaddress'];
                    $updatepincode=$_POST['updatepincode'];
                    $updatedistrict=$_POST['updatedistrict'];
                    $updatestate=$_POST['updatestate'];
                    $updatecountry=$_POST['updatecountry'];
                    $updateabout=$_POST['updateabout'];
                    $updatetagline=$_POST['updatetagline'];
                    mysqli_query($con, "Update gigster_login set type='$updatetype',dob='$updatedob',gender='$updategender',address='$updateaddress',pincode='$updatepincode',district='$updatedistrict',state='$updatestate',country='$updatecountry',about='$updateabout',tagline='$updatetagline' where phone='$set_phone'");
                   
                     $status = "success";
                    $response =null;
                    $message = "details updated succesfully";
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