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
                case "imageprofile":
                    if(isset($_POST['set_phone'])){
                        $set_phone=$_POST['set_phone'];
                        $image_id = $_POST["image_id"];
                        if ($_FILES && isset($_FILES["file"]["tmp_name"])) {
                            $croped_image = $_FILES['file'];
                            $tf = $_FILES["file"]["tmp_name"];
                            list($w, $h) = getimagesize($tf);
                            $width = 900;
                            $height = 900;
                            $ratio = max($width/$w, $height/$h);
                            $h = ceil($height / $ratio);
                            $x = ($w - $width / $ratio) / 2;
                            $w = ceil($width / $ratio);
                            $image_name = time().".jpg";
                            $path = "../img_profile/".$image_name;
                            $imgString = file_get_contents($_FILES['file']['tmp_name']);
                            $image = imagecreatefromstring($imgString);
                            $tmp = imagecreatetruecolor($width, $height);
                            imagecopyresampled($tmp, $image,
                                0, 0,
                                $x, 0,
                                $width, $height,
                                $w, $h);
                            switch ($_FILES['file']['type']) {
                                case 'image/jpeg':
                                    imagejpeg($tmp, $path, 60);
                                    break;
                                case 'image/png':
                                    imagepng($tmp, $path, 0);
                                    break;
                                case 'image/gif':
                                    imagegif($tmp, $path);
                                    break;
                                default:
                                    exit;
                                    break;
                            }
                            imagedestroy($image);
                            imagedestroy($tmp);
                            
                            if(isset($_POST["new_entry"])){
                                
                            } else {
                                /* Only if updating existing entries */ 
                                if($image_id=="1"){
                                    $var = "`photo`='$image_name'";
                                } else {
                                    $var = "`photo`='$image_name'";
                                }
                                $upload_db=mysqli_query($con,"UPDATE `gigster_login` SET ".$var." WHERE `phone`='$set_phone'");    
                            }
                            
                            
                            
                            
                            
                            $status = "success";
                            $response = $image_name;
                            $message = "Image uploaded";
                        } else {
                            $status = "failure";
                            $response = null;
                            $message = "File not found.";
                        }
                    } 
                    else {
                        $status = "failure";
                        $response = null;
                        $message = "Isset is not working. please enter all the details";
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
