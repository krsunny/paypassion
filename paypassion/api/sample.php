<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
figure.pay-passion-gig-profile {
  font-family: "Raleway", Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  background: #34495e;
  color: #333;
  text-align: center;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  font-size: 16px;
}
figure.pay-passion-gig-profile * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
figure.pay-passion-gig-profile img {
  max-width: 100%;
  vertical-align: top;
}
figure.pay-passion-gig-profile .image {
  position: relative;
  border-bottom: 4px solid #34495e;
  z-index: 1;
}
figure.pay-passion-gig-profile .image:before {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 20px 20px 0 20px;
  border-color: #34495e transparent transparent transparent;
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  -webkit-transform: translate(-50%, -15px);
  transform: translate(-50%, -15px);
  z-index: -1;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
figure.pay-passion-gig-profile .image p {
  font-weight: 500;
  margin: 0;
  padding: 0 30px;
  line-height: 1.6em;
  position: absolute;
  top: 50%;
  width: 100%;
  color: #ffffff;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  opacity: 0;
  font-style: italic;
}
figure.pay-passion-gig-profile figcaption {
  background-color: #ffffff;
  padding: 25px;
}
figure.pay-passion-gig-profile h3 {
  margin: 0 0 5px;
  text-transform: uppercase;
  font-weight: 400;
}
figure.pay-passion-gig-profile h3 span {
  font-weight: 800;
}
figure.pay-passion-gig-profile h5 {
  margin: 0 0 15px;
  font-weight: 400;
}
figure.pay-passion-gig-profile i {
  margin-right: 5px;
  display: inline-block;
  font-size: 24px;
  color: #000000;
  width: 35px;
  height: 35px;
  line-height: 35px;
  background: white;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.4);
  background-color: rgba(0, 0, 0, 0.05);
}
figure.pay-passion-gig-profile i:hover {
  background-color: #34495e;
  color: white !important;
}
figure.pay-passion-gig-profile:hover .image:before,
figure.pay-passion-gig-profile.hover .image:before {
  border-color: #34495e transparent transparent transparent;
  -webkit-transform: translate(-50%, 0px);
  transform: translate(-50%, 0px);
}
figure.pay-passion-gig-profile:hover .image p,
figure.pay-passion-gig-profile.hover .image p {
  opacity: 1;
}
figure.pay-passion-gig-profile:hover img,
figure.pay-passion-gig-profile.hover img {
  opacity: 0.2;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}

</style>
</head>
<body>
<div class="container">
  <div class="row">
  	<div class="col-md-3">
		<figure class="pay-passion-gig-profile">
			<div class="image">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample70.jpg" alt="sample70" />
				<p>"Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us."</p>
			</div>
			<figcaption>
				<h3>Ingredia<span> Nutrisha</span></h3>
				<h5>Artist</h5>
				<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
					<a href="#"> <i class="ion-social-twitter-outline"></i></a>
					<a href="#"> <i class="ion-social-vimeo-outline"></i></a>
				</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-md-3">
		<figure class="pay-passion-gig-profile">
			<div class="image">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample70.jpg" alt="sample70" />
				<p>"Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us."</p>
			</div>
			<figcaption>
				<h3>Ingredia<span> Nutrisha</span></h3>
				<h5>Artist</h5>
				<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
					<a href="#"> <i class="ion-social-twitter-outline"></i></a>
					<a href="#"> <i class="ion-social-vimeo-outline"></i></a>
				</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-md-3">
		<figure class="pay-passion-gig-profile">
			<div class="image">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample70.jpg" alt="sample70" />
				<p>"Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us."</p>
			</div>
			<figcaption>
				<h3>Ingredia<span> Nutrisha</span></h3>
				<h5>Artist</h5>
				<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
					<a href="#"> <i class="ion-social-twitter-outline"></i></a>
					<a href="#"> <i class="ion-social-vimeo-outline"></i></a>
				</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-md-3">
		<figure class="pay-passion-gig-profile">
			<div class="image">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample70.jpg" alt="sample70" />
				<p>"Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us."</p>
			</div>
			<figcaption>
				<h3>Ingredia<span> Nutrisha</span></h3>
				<h5>Artist</h5>
				<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
					<a href="#"> <i class="ion-social-twitter-outline"></i></a>
					<a href="#"> <i class="ion-social-vimeo-outline"></i></a>
				</div>
			</figcaption>
		</figure>
	</div>
	<div class="col-md-3">
		<figure class="pay-passion-gig-profile">
			<div class="image">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample70.jpg" alt="sample70" />
				<p>"Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us."</p>
			</div>
			<figcaption>
				<h3>Ingredia<span> Nutrisha</span></h3>
				<h5>Artist</h5>
				<div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a>
					<a href="#"> <i class="ion-social-twitter-outline"></i></a>
					<a href="#"> <i class="ion-social-vimeo-outline"></i></a>
				</div>
			</figcaption>
		</figure>
	</div>
  </div>
</div>
<script>
	$(document).ready(function(){
		$(".hover").mouseleave(function() {
		  $(this).removeClass("hover");
		});
		$("figure.pay-passion-gig-profile").mouseenter(function(){
			$(this).css({"box-shadow":"6px 6px 7px rgba(0, 0, 0, 0.45)"});
		}).mouseleave(function(){
			$(this).css({"box-shadow":"0px 0px 7px rgba(0, 0, 0, 0.15)"});
		});
	});
</script>
</body>
</html>
