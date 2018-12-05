<?php 
    include 'header.php';
    include 'connect.php';
    if(isset($_POST['buy'])){
    	if($_POST['full_name']==''||$_POST['phone_number']==''||$_POST['email_id']==''||$_POST['address']==''){
    		echo "<script>alert('Please fill the complete details');</script>";
    	}
    	else{
    		$full_name = $_POST['full_name'];
    		$phone_number= $_POST['phone_number'];
    		$email_id=$_POST['email_id'];
    		$address = $_POST['address'];
    		$item_id = $_POST['item_id'];
    		mysqli_query($con, "INSERT INTO `store`(`id`, `full_name`, `phone_number`, `email_id`, `address`, `timestamp`, `status`, `item_id`) VALUES ('','".$full_name."','".$phone_number."','".$email_id."', '".$address."', now()), 'ACTIVE', '".$item_id."'");
    		echo "<script>alert('Thank you for your order!!!');</script>";
    	}
    }
    $sql = mysqli_query($con, "SELECT `id`, `title`, `author`, `price`, `descrip`, `rating`, `image`, `status`, `time_stamp` FROM `store_entries` WHERE `status` = 'ACTIVE'");
    if(mysqli_num_rows($sql)>0){
        $output = '';
        while($r=mysqli_fetch_assoc($sql)){
            $id              = $r["id"];
            $title           = $r["title"];
            $author          = $r["author"];
            $price           = $r["price"];
            $descrip         = $r["descrip"];
            $rating          = $r["rating"];
            $image           = json_decode($r["image"]);
            $output          .= '<div class="img1">
    			<img src="store/images/'.$image[0].'" alt="" class="store_list_image" id="item_'.$id.'" />
    			<ul>
    				<li>
    				    <a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog" data-title="'.$title.'" data-author="'.$author.'" data-price="'.$price.'" data-descrip="'.$descrip.'" data-rating="'.$rating.'" data-image="'.$image[0].'">
    				        <i class="fa fa-eye" aria-hidden="true"></i>
    				        View
    				    </a>
    				</li>
    			</ul>
    		</div>';
        }
    } else {
        $output = '';
    }
?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="store/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="store/css/style.css" rel='stylesheet' type='text/css' />
<!-- font-awesome-icons -->
<link href="store/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!--//fonts--> 
<!-- login -->
<h1>Paypassion Store</h1>
<div class="login-section">
	<div class="toprow">
		<?php echo $output; ?>
		<div class="clear"></div>
	</div>
</div>
</br>
</br>
<!-- small dialog -->
<div class="pop-up">
	<div id="small-dialog" class="mfp-hide edit">
		<h2 class="sub-head-w3-agileits store_details store_title">Ho Jeev</h2>	
		<div class="popupleft">
			<img src="store/images/ho_jeev_cover.jpg" alt="" class="store_image store_details" />
			<p><b>Title</b>: <span class="store_title store_details">Ho Jeev</span></p>
			<p><b>Author / Artist</b>: <span class="store_artist store_details">Jaison Sequeira</span></p>
			<p><b>Price</b>:  <span class="store_pric store_details">Rs. 200 + Shipping Charges</span></p>
			<div class="special-star">
    			<p style='text-align:justify; padding:20px;' class="store_descrip1">Description: ‘Ho Jeev’ Konkani music album has 10 songs of different moods and genres composed by Jaison J Sequeira. Musically strong, this album displays the mastery of Roshan D’souza, Anjelore over ‘right chord at the right place’. A blend of rendition by upcoming and experienced singers, ‘Ho Jeev’ features Prajoth D’sa, Robin Sequeira, Jacqueline Fernandes, Cajetan Dias, Shiny Pereira, Ashwin D’costa and Jaison J Sequeira. 
                </p>
				<b>Rating </b>: 
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</div>
		</div>
		<div class="popupright">
			<p  style='text-align:justify; padding:20px;' class='store_descrip2'>Two group songs are sung by Soad 4 Top 10 singers and young singers from Gurpur parish. Songs were mixed and mastered at Daijiworld Audio Visual Pvt Ltd, Mangalore and Orpheus, Kochi. ‘Ho Jeev’ album was nominated for the Best Music Album 2016 and Best Singer Female 2016 categories at the 9th Global Konkani Music Awards.</p>
			<form action="store.php" method="POST">
    			<input type="text" name="full_name" placeholder="Full Name" required=""/>
    			<input type="text" name="phone_number" placeholder="Phone Number" required=""/>
    			<input type="text" name="email_id" placeholder="Email ID" required=""/>
    			<input type="hidden" name="item_id" value="1" />
    			<textarea placeholder="Postal Address" name='address' required=""></textarea>
    			<ul class="payment-sendbtns">
    			    <li><input type="submit" name="buy" value="Buy"></li>
    			</ul>
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- //small dialog -->
<!-- small dialog1 -->
<div class="pop-up"> 
	<div id="small-dialog1" class="mfp-hide edit">
		<h2 class="sub-head-w3-agileits">Ho Jeev</h2>	
		<div class="popupleft">		
			<img src="store/images/ho_jeev_cover.jpg" alt="" />
			<p><b>	Name of the album</b>: Ho Jeev</p>
			<p><b> Price</b> :  Rs. 200 + shipping charges</p>
			<div class="special-star">
			<p style='text-align:justify; padding:20px;'>Description: ‘Ho Jeev’ Konkani music album has 10 songs of different moods and genres composed by Jaison J Sequeira. Musically strong, this album displays the mastery of Roshan D’souza, Anjelore over ‘right chord at the right place’. A blend of rendition by upcoming and experienced singers, ‘Ho Jeev’ features Prajoth D’sa, Robin Sequeira, Jacqueline Fernandes, Cajetan Dias, Shiny Pereira, Ashwin D’costa and Jaison J Sequeira. 
 </p>
				<b>Rating </b>: 
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star-half-o" aria-hidden="true"></i>
			</div>
		</div>
		<div class="popupright">
		
			<h4><b>Author:</b>Jaison Sequeira</h4>
			<p  style='text-align:justify; padding:20px;'>Two group songs are sung by Soad 4 Top 10 singers and young singers from Gurpur parish. Songs were mixed and mastered at Daijiworld Audio Visual Pvt Ltd, Mangalore and Orpheus, Kochi. ‘Ho Jeev’ album was nominated for the Best Music Album 2016 and Best Singer Female 2016 categories at the 9th Global Konkani Music Awards.</p>
			<form action="store.php" method="POST">
			<input type="text" name="full_name" placeholder="Full Name" required=""/>
			<input type="text" name="phone_number" placeholder="Phone Number" required=""/>
			<input type="text" name="email_id" placeholder="email ID" required=""/>
			<textarea placeholder="Postal Address" name='address' required=""></textarea>
			<ul class="payment-sendbtns">
			<li><input type="submit" name="buy" value="Buy"></li>
			</ul>
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- //small dialog1 -->


<!-- //small dialog7 -->
<!--js-->
<script type="text/javascript" src="store/js/jquery-2.1.4.min.js"></script>
<!--//js-->
<!--popup-js-->
<script src="store/js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--//popup-js-->

</body>
</html>
<?php include 'footer.php';?>