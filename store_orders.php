<?php 
include 'connect.php';
$store_order = mysqli_query($con, 'select * from store');
while($row=mysqli_fetch_array($store_order)){
	$field1 = $row['full_name'];
	$field2 = $row['phone_number'];
	$field3 = $row['email_id'];
	$field4 = $row['address'];
	$field5 = $row['timestamp'];
	$field6 = $row['id'];
	
	$output .= "<h3>$field6---$field1---$field2---$field3---$field4---$field5</h3>";
}
echo $output;
?>