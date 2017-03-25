<!-- Navigation bar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="main.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="featured.html">Featured <span class="sr-only">(current)</span></a></li>
				
				<li><a href="new_released.html">New Releases</a></li>                       
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Years <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="2016.html">2016</a></li>
						<li><a href="2015.html">2015</a></li>
						<li><a href="2014.html">2014</a></li>
					</ul>
				</li>
				<!-- Categories drop-down -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="Action.html">Action</a></li>					
						<li><a href="Adventure.html">Adventure</a></li>
						<li><a href="Family.html">Family</a></li>
						<li><a href="Comedy.html">Comedy</a></li>
					</ul>
				</li>
				
				<li><a href="#" data-toggle="modal" data-target="#myModal">Contact Us</a></li>
				
				<!-- Contact Us Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
							</div>
							<div class="modal-body">
								<p><strong>Email:</strong> dimatech@chilflix.com </p>
								<p><strong>Phone:</strong> 204-000-0000</p>
								<p><strong>Address:</strong> 322-3455 Sample Address.</p>
								<div class="divider"></div>
								<h3>Send us an Email</h3>
								
								<!-- send email form in modal -->
								<form class="form-horizontal">
									<div class="form-group">
										<label for="input_subject" class="col-sm-2 control-label">Subject:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="input_subject" placeholder="Subject">
										</div>
									</div>
									<div class="form-group">
										<label for="input_text" class="col-sm-2 control-label">Text:</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="3" id="input_text"></textarea>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-default"><i class="fa fa-envelope-o" style="margin-right: 10%;"></i>Send</button>
							</div>
						</div>
					</div>
				</div>
			</ul>		
			
			<!-- Right side of the Nav bar -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="help.html"><i class="fa fa-info-circle" style="margin-right: 5px;"></i>Help</a></li>
				<li><a href="../index.html"><i class="fa fa-sign-out" style="margin-right: 5px;"></i>Log-out</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>