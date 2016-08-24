
	<div class="container">
		<div class="row">
			<div class="add_school col-sm-12"><br>
				<button type="button" class="btn btn-primary col-xs-5"  data-target="#add_school" data-toggle="modal"><i class="fa fa-plus"></i> Add School</button>
			</div>
			<!-- NOTE: After finishing the functionality, refactor this code and create a modal folder for all modals -->

			<!-- Modal window begins here for add school button -->
				<div class="modal fade" id="add_school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<!-- Header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 style="text-align: center; color: #d33;">Add School</h3>
								
							</div><!-- End of modal header -->

							<!-- Body (Form)-->
							<div class="modal-body">
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
							<div class="modal-footer">
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
						<button type="button" class="btn btn-primary" data-target="#eng_edit" data-toggle="modal">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</h2><br>
					<!-- Modal window for engineering Edit begins here -->
						<div class="modal fade" id="eng_edit" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3>Edit This School</h3>
									</div>
									<div class="modal-body">
										<form method="post" action="">
											<div  class="form-group">
												<label>Name:</label>
													<input type="text" class="form-control" placeholder="Enter Field">
												
											</div>
										</form>
									</div><!-- End of modal body -->
									<div class="modal-footer">
										<button type="button" class="btn btn-success">Submit</button>
									</div>
								</div>
							</div>
						</div>
					<!-- End of modal window for engineering edit -->
					<table class="table table-striped table-hover col-xs-12">
						<tr>
							<td>Software Engineering</td>
							<td><a href="<?php echo site_url('school_settings/software_engineering')?>"><i class="fa fa-pencil" style="color: #5ad;"></i>Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Information Communication Technology (ICT)</td>
							<td><a href="<?php echo site_url('school_settings/ict')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Electrical Engineering</td>
							<td><a href="<?php echo site_url('school_settings/electrical')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Networking</td>
							<td><a href="<?php echo site_url('school_settings/networking')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>TELECOM</td>
							<td><a href="<?php echo site_url('school_settings/telecom')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
					</table>

				</div>

				<!-- This div only provide space between enginering and business div -->
				<div class="col-xs-1"></div>
				<!-- End of div that provides space -->

				<div class="business col-xs-12 col-sm-4 col-lg-4">
					<h1><i class="fa fa-book fa-2x"></i></h1>
					<h2><strong>Business</strong>
						<button type="button" class="btn btn-primary">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</h2>
					<table class="table table-striped table-hover col-xs-12"><br>
						<tr>
							<td>Accounting</td>
							<td><a href="<?php echo site_url('school_settings/accounting')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Management</td>
							<td><a href="<?php echo site_url('school_settings/management')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Marketing</td>
							<td><a href="<?php echo site_url('school_settings/marketing')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Economics</td>
							<td><a href="<?php echo site_url('school_settings/economics')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
						<tr>
							<td>Office Secretaraiship</td>
							<td><a href="<?php echo site_url('school_settings/secretariats')?>"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
							<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
						</tr>
					</table>
				</div>

			<!-- Div to add a school begins here -->
			<div class="col-sm-1"><br>
				
			</div> 


		</div><!-- End of row -->
	</div>
