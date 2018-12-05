<?php include'header.php';
if (isset($_POST["email1"])){

        $email = $_POST["email1"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];

        // Sending confirmation email

        require_once('PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.

        $msg = '<body style="border:1px solid darkgray;width:100%;height:fit-content;font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;"><div style="padding: 1em;">Name:'.$name.'</br>Email:'.$email.'</br>Phone:'.$phone.'</br>Message:'.$message.'</p><h1 title="PayPassion | One Community, One Talent"><a title="PayPassion - Mangalore’s Talent Community" href="http://paypassion.in/" target="_blank"><img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" src="http://paypassion.in/images/logo.jpg" width=\'300\' height=\'80\' /> </a></h1></div></body>';

        $subj = 'Subscription @ PayPassion';

        $to   = $email;

        $from = 'info@paypassion.in';

        $name = 'PayPassion';

        function smtpmailer($to, $from, $from_name = 'PayPassion', $subject, $body, $is_gmail = true) {

            global $error;

            $mail = new PHPMailer();

            $mail->IsSMTP();

            $mail->SMTPAuth = true;

            $mail->SMTPDebug  = 1;

            if($is_gmail) {

                $mail->SMTPSecure = 'tls';

                $mail->Host = 'mailout.one.com';

                $mail->Port = 587;

                $mail->Username = 'info@paypassion.in';

                $mail->Password = 'Info1234';

            } else {

                $mail->SMTPSecure = 'tls';

                $mail->Host = 'mailout.one.com';

                $mail->Port = 587;

                $mail->Username = 'info@paypassion.in';

                $mail->Password = 'Info1234';

            }

            $mail->IsHTML(true);

            $mail->From="info@paypassion.in";

            $mail->FromName="PayPassion";

            $mail->Sender=$from; // indicates ReturnPath header

            $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers

            $mail->AddCC('cc@site.com.com', 'CC: to site.com');

            $mail->Subject = $subject;

            $mail->Body = $body;

            $mail->AddAddress($to);

            if(!$mail->Send()){

                $error = 'Mail error: '.$mail->ErrorInfo;

                return true;

            } else {

                $error = 'Message sent!';

                return false;

            }

        }

        //smtpmailer($to, $from, $name ,$subj, $msg);

        // Email sent

        // Sending confirmation email

        $msg = 'Subscription @ paypassion.in. Email: '.$email;

        $subj = 'Subscription @ PayPassion';

        $to   = 'krsunny088@gmail.com';

        $from = 'info@paypassion.in';

        $name = 'PayPassion';

        smtpmailer($to, $from, $name ,$subj, $msg);

        // Email sent

    } else {

        

    }




?>

<!-- banner -->
<style>
video::-webkit-media-controls-panel{display:none;}
</style>
<div id="vOverlay" style="position:relative; height:300px; z-index:2;"></div>
<video style="position:relative; top:-300px; z-index:1;width:100%" id=videoPlayer controls="controls">
<source src="video/paypassion_final.mp4" type="video/mp4">
</video>

<script>
    var v = document.getElementById('videoPlayer');
    var vv = document.getElementById('vOverlay');
    <!-- Auto play, Half volume -->
    v.play()
    v.volume = 0.5;
    v.firstChild.nodeValue = "Play";

    <!-- Play, Pause -->
    vv.addEventListener('click',function(e){
        if (!v.paused) {
            console.log("pause playback");
            v.pause();
            v.firstChild.nodeValue = 'Pause';
        } else {
            console.log("start playback")
            v.play();
            v.firstChild.nodeValue = 'Play';
        }
      });
</script>
<script src="js/jquery.vide.min.js"></script>
<div class="clearfix"></div><br/>
	
	<!-- modal-sign -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" class="img-responsive" src="images/g1.jpg" alt="">
					<p>Paypassion is an online portal formed exclusively for the passionate community. It strongly believes that passion to do something different can really change our approach as well as our opinion about the scope and profitability of our passion. Paypassion calls all its verified members ‘Gigsters’. The current objective of Paypassion is to form a database of all the young and old talents of the west coast of South India starting from Mangaluru. Gigsters are encouraged to create their detailed profile on Paypassion for this purpose. With a strong database of passionate people, Paypassion will introduce various features for the betterment of this community. </p>
				</div> 
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal123" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<a href='https://store.paypassion.in/' target='_blank' class=''><img src="https://res.cloudinary.com/medait/image/upload/v1541051833/paypassion_store.jpg" alt=" " class="img-responsive" /> </a>
					</br>
					<center><h2>Welcome to our Store</h2></br>
					<a href='https://store.paypassion.in/' target='_blank' class='btn_style'>Visit Store</a></center>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal-sign -->    
	<!-- //banner -->
	<!-- about -->
	<div id="about" class="about" style="margin-top:-300px;"> 
		<div class="container"> 
			<div class="about-agileinfo"> 
				<div class="col-sm-3 about-grids about-grids2">
					<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" src="images/img1.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-sm-6 about-text w3-agileits">
					<h3 title="PayPassion | One Community, One Talent">About Us</h3>
					<h4 title="PayPassion | One Community, One Talent"> </h4>
					<p>Paypassion is an online portal formed exclusively for the passionate community. It strongly believes that passion to do something different can really change our approach as well as our opinion about the scope and profitability of our passion. Paypassion calls all its verified members ‘Gigsters’. The current objective of Paypassion is to form a database of all the young and old talents of the west coast of South India starting from Mangaluru. Gigsters are encouraged to create their detailed profile on Paypassion for this purpose. With a strong database of passionate people, Paypassion will introduce various features for the betterment of this community.</p><br/>
					<div class="more">
									<a title="PayPassion - Mangalore’s Talent Community" href="http://paypassion.in/paypassion/register.php" class=""> Register Now</a>
								</div>	
				</div>
				<div class="col-sm-3 about-grids about-grids2">
					<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" src="images/img2.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>	 			
		</div>	 			
	</div>			
	<!-- //about -->  
	<!-- services -->
	<div id="services" class="services jarallax">
		<div class="container">
			<div class="title">
				<h3 title="PayPassion | One Community, One Talent">Follow us on</h3>
				<p> </p>
			</div>
			<div class="services-row">
				<div class="col-md-3 col-xs-6 services-grids">
					<a title="PayPassion - Mangalore’s Talent Community" href="https://www.facebook.com/paypassion.in"><span class="glyphicon fa fa-facebook-official effect-1" aria-hidden="true"></span></a>
					<h4 title="PayPassion | One Community, One Talent"></h4>
					<p></p> 
				</div>
				<div class="col-md-3 col-xs-6 services-grids">
					<a title="PayPassion - Mangalore’s Talent Community" href="https://www.instagram.com/paypassion"><span class="glyphicon fa fa-instagram effect-1" aria-hidden="true"></span></a>
					<h4 title="PayPassion | One Community, One Talent"></h4>
					<p></p> 
				</div>
				<div class="col-md-3 col-xs-6 services-grids">
					<a title="PayPassion - Mangalore’s Talent Community" href="https://twitter.com/paypassion"><span class="glyphicon fa fa-twitter effect-1" aria-hidden="true"></span></a>
					<h4 title="PayPassion | One Community, One Talent"></h4>
					<p></p> 
				</div>
				<div class="col-md-3 col-xs-6 services-grids">
					<a title="PayPassion - Mangalore’s Talent Community" href="https://www.youtube.com/channel/UCNwfZ2OG6SWsVl_YGgcfykg"><span class="glyphicon fa fa-youtube effect-1" aria-hidden="true"></span></a>
					<h4 title="PayPassion | One Community, One Talent"></h4>
					<p></p> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<div class="clearfix"></div><br/>
	<!-- //services -->
	<!-- team -->
<div class="banner">
		<div class="container">
			<div class="banner-text agileits-w3layouts">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-textagileinfo">
								<h6 title="PayPassion | One Community, One Talent">WELCOME TO</h6>	 
								<h3 title="PayPassion | One Community, One Talent">PAYPASSION</h3>	 
								
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo"> 
								<h6 title="PayPassion | One Community, One Talent">WELCOME TO</h6>	 
								<h3 title="PayPassion | One Community, One Talent">PAYPASSION </h3>	
								
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo">
								<h6 title="PayPassion | One Community, One Talent">WELCOME TO</h6>
								<h3 title="PayPassion | One Community, One Talent">PAYPASSION</h3>		 	
									
							</div>		
						</li> 
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="clearfix"></div><br/>
	<!-- //team --> 
	<!-- testimonials -->
	<div class="testimonials services jarallax">
		<div class="container">  
			<div class="title">
				<h3 title="PayPassion | One Community, One Talent">What People say</h3>
				
			</div>
			<div class="testi-agileinfo services-row"> 
				<div class="col-md-12 testi-three-grids"> 
					
					<div class="testi-right">
						<p>An online survey was conducted to gather opinion from close to 150 individuals from various disciplines like music, art, theatre, dance, public speaking etc. A whopping 98% were in favor of having a database of the artists/performers of our region. Hence Paypassion is conceptualized by Jaison J Sequeira to build a database as an initial step. If realized, Paypassion will be a very useful asset to the present and for the future as well. To attract all the young and old talents of Mangaluru and nearby region, the registration is absolutely free till 31 December 2018.  </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<!-- //testimonials -->
	<!-- portfolio -->
	<div id="portfolio" class="portfolio">
		<div class="container">
			<div class="title">
				<h3 title="PayPassion | One Community, One Talent">Events Gallery</h3>
				
			</div>
			<div class="gallery_gds agileits-w3layouts">
				<ul class="simplefilter">
					<li class="active" data-filter="all">All</li>
					<li data-filter="1">Category 1</li>
					<li data-filter="2">Category 2</li>
					<li data-filter="3">Category 3</li>
				</ul>
				<div class="filtr-container">
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community" href="images/g1.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community" src="images/g1.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Luminous night">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community" href="images/g2.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g2.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="City wonders">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community" href="images/g3.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g3.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
                    </div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="In production">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community" href="images/g5.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g5.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community" href="images/g6.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g6.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="In production">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g8.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g8.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g9.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g9.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g10.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g10.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g11.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g11.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g12.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g12.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g13.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g13.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g14.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g14.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g15.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g15.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g16.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g16.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g17.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g17.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g18.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g18.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g19.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g19.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
					<div class="col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="hover ehover14">
							<a title="PayPassion - Mangalore’s Talent Community"href="images/g20.jpg" class="swipebox" title="">
								<img title="PayPassion | One Community, One Talent" alt="PayPassion - Mangalore’s Talent Community"src="images/g20.jpg" alt="" class="img-responsive" />
								<div class="overlay">
									<h4 title="PayPassion | One Community, One Talent">Gallery</h4>
									<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">Show More</div>
								</div>
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- map -->
	<div class="map w3layouts">
		<div class="col-md-8 map-left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1979667544947!2d74.93126231470568!3d12.959180618657244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba3564d4e111f8d%3A0x3fdf8ce3075bbf0!2sGurupura+Rd%2C+Kaikamba%2C+Karnataka+574151!5e0!3m2!1sen!2sin!4v1540960466909" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4 map-wthree-right"> 
			<h4 title="PayPassion | One Community, One Talent"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Address</h4>
			<p>D No. 6-141/F, Gurupura Kaikamba,<br/>Mangalore, Karnataka<br/>India - 574151.</p>
			<h4 title="PayPassion | One Community, One Talent"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Phone</h4>
			<p> +91 8618908035</p>
			<h4 title="PayPassion | One Community, One Talent"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email</h4>
			<p class="agile-last"><a title="PayPassion - Mangalore’s Talent Community"href="mailto:paypassion.in@gmail.com">paypassion.in@gmail.com</a></p> 
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //map -->
	<!-- contact -->
	<div id="contact" class="contact">
		<div class="team-info w3-agileits">
			<div class="container"> 
				<div class="title">
					<h3 title="PayPassion | One Community, One Talent">Contact Us</h3>
					<p></p>
				</div>  
				<div class="contact-form">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" class="email" name="email1" placeholder="Email" required="">
						<input type="text" name="phone" placeholder="Phone" required="">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" value="SUBMIT" >
					</form>
				</div>
			</div>
		</div>
	</div>	
<br/>

<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Context here</p>
      </div>
    </div>
  </div>
</div>
	<!-- //contact -->
	<?php include'footer.php';?>