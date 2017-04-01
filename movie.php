<?php 
	require 'phpscripts/databaseConnect.php';
	require 'phpscripts/commonDatabase.php';
	
	$movie = get_row($conn, 'Movies', "id = $_GET[id]");
?>

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
	
		<style type="text/css">
			.dropdown:hover .dropdown-menu {
				display: block;
			}
			 
			.poster_img {
				width: 100%;
			}
		
			.poster_img:hover {
				opacity: 0.3;
			}
		</style>
	
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
			
			<!-- The Movie Player -->
			<div class="row">
				<div class="col-xs-2" style="text-align:center;" >
					<img src="res/leftSpeaker.png" />
				</div>
				
				<div class="col-xs-8" style="text-align:center;">
					<iframe style="display:block;width:100%" width="800" height="400" 
						src="<?php echo $movie['Trailer']; ?>" frameborder="0" allowfullscreen>
					</iframe>
				</div>
				
				<div class="col-xs-2"  style="text-align:center;" > 
					<img src="res/rightSpeaker.png" /> 
				</div>
				
			</div>
			<br/><br/>
		
			<!-- Movie Description -->
			<div class="row" style="border:3px solid grey;padding:3px;">
				<div class="col-xs-2">
					<a href="#"><img src="<?php echo $movie['Poster']; ?>" class="img-thumbnail"></a>
				</div>
				<div class="col-xs-10" style="color:white;">
					<!-- Title -->
					<h1 style="font-family: Impact"> <?php echo $movie['FullName']; ?></h1>
					
					<!-- IMDB rating -->
					<span class="imdbRatingPlugin" data-user="ur69609970" data-title="tt1985949" 
					data-style="p2">
						<a href="http://www.imdb.com/title/tt1985949/?ref_=plg_rt_1">
							<img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_38x18.png" alt=" The Angry Birds Movie(2016) on IMDb" />
						</a>
					</span>
					<script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>
					
					<!-- Trailer Modal -->			
					<!-- Button trigger modal -->
					<button style="padding-left:10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#trailerModal">
						<i class="fa fa-play" aria-hidden="true"></i> <strong><em>Trailer</em></strong>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="trailerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 style="text-align:center" class="modal-title" id="myModalLabel"><strong><i class="fa fa-play" aria-hidden="true" style="margin-right: 1em;"></i><?php echo $movie['FullName']; ?> Trailer</strong></h4>
								</div>
								<div class="modal-body">
									<iframe style="display:block;width:100%" width="800" height="400" 
										src="<?php echo $movie['Trailer']; ?>" frameborder="0" allowfullscreen>
									</iframe>			
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>							
								</div>
							</div>
						</div>				
					</div>				
					
					<!-- Description -->				
					<p style="font-size: 18px; 	text-align: justify;"><?php echo $movie['Description']; ?></p>				
					
				</div>
			</div>

			<a href="#" class="newReleased_Header"><h1>Similar Movies</h1></a>
			<div class="row">
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="singStreet.html"><img src="res/posters/singstreet.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="singStreet.html">Sing Street</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="collector.html"><img src="res/posters/thecollector.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="collector.html">Collector</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="littleMen.html"><img src="res/posters/littleman.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="littleMen.html">Little Men</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="kubo.html"><img src="res/posters/kubo.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="kubo.html">KUBO</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="keanu.html"><img src="res/posters/keanu.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="keanu.html">Keanu</a></h4>
						</div>
					</div>
				</div>
				
				<div class="col-xs-2">
					<div class="thumbnail">
						<a href="13hours.html"><img src="res/posters/13hours.jpg" class="poster_img" alt="Angry_Birds"></a>
						<div class="caption">
							<h4 align="center"><a href="13hours.html">13 Hours</a></h4>
						</div>
					</div>
				</div>
			</div>
			<br/><br/>
		</div>
	
		<!-- footer -->
		<?php require 'footer.php'?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="addons/bootstrap/js/bootstrap.min.js"></script>
	
		<!-- Script to play/pause the trailer on the movie page -->
		<script>
			var youtubeFunc ='';
			var outerDiv = document.getElementById("trailerModal");
			var youtubeIframe = outerDiv.getElementsByTagName("iframe")[0].contentWindow;
			$('#trailerModal').on('hidden.bs.modal', function (e) {
			youtubeFunc = 'pauseVideo';
			youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
			});
			$('#trailerModal').on('shown.bs.modal', function (e) {
				youtubeFunc = 'playVideo';
				youtubeIframe.postMessage('{"event":"command","func":"' + youtubeFunc + '","args":""}', '*');
			});
		</script>
  </body>
</html>