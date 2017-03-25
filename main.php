<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ChillFlix</title>
    <link rel="shortcut icon" href="res/Thumbnail.png" />
		<!-- font awsome css -->
		<link href="addons/font-awesome/css/font-awesome.css" rel="stylesheet">
	
    <!-- Bootstrap css -->
    <link href="addons/bootstrap/css/bootstrap-chillflix.css" rel="stylesheet">
		
		<!-- footer css -->
		<link href="css/footer-chillflix.css" rel="stylesheet" >


		<style>
		
			.carusel_img {
				width: 100%;
				max-height: 500px;
			}
			
			.poster_img {
				width: 100%;
			}
		
			.poster_img:hover {
				opacity: 0.3;
			}
			
			.dropdown:hover .dropdown-menu
			 {
					display: block;
			 }
		
		</style>
	
		<script>
			$(document).ready(function() 
			{
				$('#myCarousel').carousel
				({
					interval: 10000
				})
					
				$('#myCarousel').on('slid.bs.carousel', function() 
				{
					//alert("slid");
				});
			});
		</script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="container">
		
			<!-- Header -->
			<?php require 'header.php' ?>
			
			<!-- Navbar -->
			<?php require 'navbar.php' ?>
			
			
			<!-- Carusel -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="bvs.html">
							<img src="res/batman.jpg" class="carusel_img" alt="BATMAN">
							<div class="carousel-caption">
								BATMAN VS SUPERMAN
							</div>
						</a>
					</div>
					<div class="item">
						<a href="avatar.html">
							<img src="res/avatar.jpg" class="carusel_img" alt="AVATAR">
							<div class="carousel-caption">
								AVATAR
							</div>
						</a>
					</div>
					<div class="item">
						<a href="offender.html">
							<img src="res/offender.jpg" class="carusel_img" alt="OFFENDER">
							<div class="carousel-caption">
								OFFENDER
							</div>
						</a>
					</div>
					<div class="item">
						<a href="hangover.html">
							<img src="res/hangover.jpg" class="carusel_img" alt="HANGOVER">
							<div class="carousel-caption">
								HANGOVER
							</div>
						</a>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div> <!-- END CARUSEL -->
		
			<!-- Featured -->
			<a href="featured.html" class="featured_Header"><h1>Featured </h1></a>
			<div class="row">
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="movie.html"><img src="res/angry_birds.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="movie.html">Angry Birds</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="bvs.html"><img src="res/1.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="bvs.html">Bat Vs Sup</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="sparty.html"><img src="res/2.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="sparty.html">Sausage Party</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="civilWar.html"><img src="res/3.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="civilWar.html">Civil War</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="bfg.html"><img src="res/4.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="bfg.html">BFG</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="nonStop.html"><img src="res/5.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="nonStop.html">Non-Stop</a></h4>
						</div>
					</div>
				</div>
			</div> 
			
			<!-- New Releases -->
			<a href="new_released.html" class="newReleased_Header"><h1>New Releases</h1></a>
			<div class="row">
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="singStreet.html"><img src="res/6.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="singStreet.html">Sing Street</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="collector.html"><img src="res/7.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="collector.html">Collector</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="littleMen.html"><img src="res/8.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="littleMen.html">Little Men</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="kubo.html"><img src="res/9.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="kubo.html">KUBO</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="keanu.html"><img src="res/10.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="keanu.html">Keanu</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="13hours.html"><img src="res/11.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="13hours.html">13 Hours</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php require 'footer.php'?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="addons/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>