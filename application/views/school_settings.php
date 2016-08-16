<!DOCTYPE html>
<html>
<head>
	<title>Fomic Polytechnic Online Transcript system</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/font-awesome/css/font-awesome.min.css');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="keyword" content="transcript generation">
	<meta name="description" content="">
	<meta name="Fomic" content="fomicgroup.cm">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-1.11.1.js'); ?>"></script>

	
</head>
<body bgcolor="#ccc">
	<div class="header col-xs-12 col-sm-12 col-lg-12">
		<h2>Fomic Polytechnic Transcript Generator</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="add_school col-sm-12"><br>
				<button type="button" class="btn btn-primary col-xs-5 wow bounceInRight" data-wow-duration="2s" data=toggle="modal" data-target="#add_school"><i class="fa fa-plus"></i> Add School</button>
			</div>

			<!-- Modal window begins here for add school button -->
				<div class="modal fade" id="add_school">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Header -->
							<div class="header">
								<h1>Add School</h1>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div><!-- End of modal header -->

							<!-- Body (Form)-->
							<div class="body">
								<div class="form-group">
									<label for="Name">Name: </label>
									<input type="text" class="form-control" name="name_school" placeholder="Enter name of school">
								</div>
								<div class="form-group">
									<label for="Name">Departments: </label>
									<input type="text" class="form-control" name="name_school" placeholder="Enter name of school">
								</div>
								
							</div> <!-- End of modal body -->

							<!-- Footer -->
							<div class="footer">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Creat School</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- End of modal window for add school button -->
		</div>
	</div>

	<div class="container fluid">
		<div class="wow slideInLeft" id="wrapper" data-wow-duration="2s" data-wow-delay="5s">
			
			<div class="col-sm-1"></div>

				<div class="engineering col-xs-12 col-sm-5 col-lg-5 wow bounceInLeft" data-wow-duration="2s">
				
					<h1><i class="fa fa-laptop fa-2x"></i></h1>
					<h2><strong>Engineering</strong>
						<button type="button" class="btn btn-primary">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</h2><br>
					<table class="table table-striped table-hover col-xs-12">
						<tr>
							<td>Software Engineering</td>
							<td><i class="fa fa-pencil"></i><a href="#">Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Information Communication Technology (ICT)</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Electrical Engineering</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Networking</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>TELECOM</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
					</table>

				</div>

				<!-- This div only provide space between enginering and business div -->
				<div class="col-xs-1"></div>
				<!-- End of div that provides space -->

				<div class="business col-xs-12 col-sm-4 col-lg-4 wow bounceInRight" data-wow-duration="2s"">
					<h1><i class="fa fa-book fa-2x"></i></h1>
					<h2><strong>Business</strong>
						<button type="button" class="btn btn-primary">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</h2>
					<table class="table table-striped table-hover col-xs-12"><br>
						<tr>
							<td>Accounting</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Management</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Marketing</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Economics</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Office Secretaraiship</td>
							<td><i class="fa fa-pencil"></i><a href="#"> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
					</table>
				</div>

			<!-- Div to add a school begins here -->
			<div class="col-sm-1"><br>
				
			</div> 


		</div><!-- End of row -->
	</div><!-- End of two divs container -->




	<!-- ==== Footer begins here ===== -->
	<br>
	<footer>
		<h5>All Rights Reserved, &copy; 2015 - <?php echo date('Y');?></h5>
	</footer>
	
	<!-- === End of footer ==== -->

	<!-- Include wow.js plugin for animation -->
	<script src="assets/js/wow.min.js"></script>
	
	<script>
		new WOW().init();
	</script>
	
	<!-- End of plugin for animation -->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>