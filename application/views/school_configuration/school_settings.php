
<div class="container">
	<div class="row">
		<div class="add_school col-sm-12"><br>
			<button type="button" class="btn btn-primary col-xs-5"  data-target="#add_school" data-toggle="modal"><i class="fa fa-plus"></i> Add School</button>
		</div>

	<!-- NOTE: After finishing the functionality, refactor this code and create a modal folder for all modals -->

			<!-- Modal window begins here for add school button -->

		<div class="modal fade" id="add_school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog">
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

<!-- Container that holds the Schools (Engineering and Business) -->

<div class="container fluid">
	<div class="row">			
		<div class="col-sm-1"></div>

		<!-- School of Engineering Begins Here -->
		<div class="engineering col-xs-12 col-sm-5 col-lg-5">
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

			<!-- Table to Display Departments -->
			<table class="table table-striped table-hover col-xs-12">
				<tr>
					<td>Software Engineering</td>
					<td><a href="#" data-target="#software" data-toggle="modal"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
					<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>

					<!-- Modal window for Software engineering Edit begins here -->
					<div class="modal fade" id="software" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="text-align:center; color: #ffba0a;">Software Engineering</h3>
								</div>
								<div class="modal-body">
									
									<ul class="nav nav-tabs" role="tablist">
										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#yearOne" aria-expanded="false" aria-controls="yearOne"><strong>Year One</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#yearTwo" aria-expanded="false" aria-controls="yearTwo"><strong>Year Two</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#BTech" aria-expanded="false" aria-controls="BTech"><strong>BTech</strong></li>

									</ul>
									<!-- Year One Collapse Window begins here -->
									<div class="collapse" id="yearOne">
								  		<div class="card card-block"><br>
			    							<h2>Year One Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			  								</form>
			  							</div>
										</div><!-- End of Year One collapse window -->


									<!-- Year Two Collapse Window begins here -->
									<div class="collapse" id="yearTwo">
			 			 				<div class="card card-block"><br>
			    							<h2>Year Two Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			   								</form>
			  							</div>
									</div><!-- End of Year Two collapse window -->

									<!-- BTech Collapse Window begins here -->
									<div class="collapse" id="BTech">
			 		 					<div class="card card-block">
			    							<h2>BTech</h2>
			   		 						<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			    							</form>
			  							</div>
									</div><!-- End of BTech collapse window -->

								</div><!-- End of modal body -->
								
							</div>
						</div>
					</div>
					<!-- End of modal window for Software engineering edit -->
				</tr>
				<tr>
					<td>Information Communication Technology (ICT)</td>
					<td><a href="#" data-target="#ict" data-toggle="modal"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
					<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
					<!-- Modal window for ICT Edit begins here -->
					<div class="modal fade" id="ict" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="text-align: center;color: #ffba0a;">Information Communication Technology (ICT)</h3>
								</div>
								<div class="modal-body">
									<ul class="nav nav-tabs" role="tablist">
										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#ict_yearOne" aria-expanded="false" aria-controls="yearOne"><strong>Year One</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#ict_yearTwo" aria-expanded="false" aria-controls="yearTwo"><strong>Year Two</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#ict_BTech" aria-expanded="false" aria-controls="BTech"><strong>BTech</strong></li>

									</ul>
									<!-- Year One Collapse Window begins here -->
									<div class="collapse" id="ict_yearOne">
								  		<div class="card card-block"><br>
			    							<h2>Year One Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			  								</form>
			  							</div>
										</div><!-- End of Year One collapse window -->


									<!-- Year Two Collapse Window begins here -->
									<div class="collapse" id="ict_yearTwo">
			 			 				<div class="card card-block"><br>
			    							<h2>Year Two Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			   								</form>
			  							</div>
									</div><!-- End of Year Two collapse window -->

									<!-- BTech Collapse Window begins here -->
									<div class="collapse" id="ict_BTech">
			 		 					<div class="card card-block">
			    							<h2>BTech</h2>
			   		 						<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			    							</form>
			  							</div>
									</div><!-- End of BTech collapse window -->

								</div><!-- End of modal body -->
								
							</div>
						</div>
					</div>
					<!-- End of modal window for ICT edit -->
				</tr>
				<tr>
					<td>Electrical Engineering</td>
					<td><a href="#" data-target="#electrical" data-toggle="modal"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
					<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
					<!-- Modal window for Electrical Engineering Edit begins here -->
					<div class="modal fade" id="electrical" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="text-align: center;color: #ffba0a;">Electrical Engineering</h3>
								</div>
								<div class="modal-body">
									<ul class="nav nav-tabs" role="tablist">
										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#elect_yearOne" aria-expanded="false" aria-controls="yearOne"><strong>Year One</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#elect_yearTwo" aria-expanded="false" aria-controls="yearTwo"><strong>Year Two</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#elect_BTech" aria-expanded="false" aria-controls="BTech"><strong>BTech</strong></li>

									</ul>
									<!-- Year One Collapse Window begins here -->
									<div class="collapse" id="elect_yearOne">
								  		<div class="card card-block"><br>
			    							<h2>Year One Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			  								</form>
			  							</div>
										</div><!-- End of Year One collapse window -->


									<!-- Year Two Collapse Window begins here -->
									<div class="collapse" id="elect_yearTwo">
			 			 				<div class="card card-block"><br>
			    							<h2>Year Two Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			   								</form>
			  							</div>
									</div><!-- End of Year Two collapse window -->

									<!-- BTech Collapse Window begins here -->
									<div class="collapse" id="elect_BTech">
			 		 					<div class="card card-block">
			    							<h2>BTech</h2>
			   		 						<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			    							</form>
			  							</div>
									</div><!-- End of BTech collapse window -->

								</div><!-- End of modal body -->
								
							</div>
						</div>
					</div>
					<!-- End of modal window for Electrical Engineering edit -->
				</tr>
				<tr>
					<td>Networking</td>
					<td><a href="" data-target="#networking" data-toggle="modal"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
					<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
					<!-- Modal window for Electrical Engineering Edit begins here -->
					<div class="modal fade" id="networking" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="text-align: center;color: #ffba0a;">Networking</h3>
								</div>
								<div class="modal-body">
									<ul class="nav nav-tabs" role="tablist">
										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#net_yearOne" aria-expanded="false" aria-controls="yearOne"><strong>Year One</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#net_yearTwo" aria-expanded="false" aria-controls="yearTwo"><strong>Year Two</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#net_BTech" aria-expanded="false" aria-controls="BTech"><strong>BTech</strong></li>

									</ul>
									<!-- Year One Collapse Window begins here -->
									<div class="collapse" id="net_yearOne">
								  		<div class="card card-block"><br>
			    							<h2>Year One Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			  								</form>
			  							</div>
										</div><!-- End of Year One collapse window -->


									<!-- Year Two Collapse Window begins here -->
									<div class="collapse" id="net_yearTwo">
			 			 				<div class="card card-block"><br>
			    							<h2>Year Two Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			   								</form>
			  							</div>
									</div><!-- End of Year Two collapse window -->

									<!-- BTech Collapse Window begins here -->
									<div class="collapse" id="net_BTech">
			 		 					<div class="card card-block">
			    							<h2>BTech</h2>
			   		 						<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			    							</form>
			  							</div>
									</div><!-- End of BTech collapse window -->

								</div><!-- End of modal body -->
								
							</div>
						</div>
					</div>
					<!-- End of modal window for Networking edit -->
				</tr>
				<tr>
					<td>TELECOM</td>
					<td><a href="#" data-target="#telecom" data-toggle="modal"><i class="fa fa-pencil" style="color: #5ad;"></i> Edit </a></td>
					<td><a href="#"><i class="fa fa-close"> Drop </i></a></td>
					<!-- Modal window for Electrical Engineering Edit begins here -->
					<div class="modal fade" id="telecom" abindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="text-align: center;color: #ffba0a;">Networking</h3>
								</div>
								<div class="modal-body">
									<ul class="nav nav-tabs" role="tablist">
										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#tele_yearOne" aria-expanded="false" aria-controls="yearOne"><strong>Year One</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#tele_yearTwo" aria-expanded="false" aria-controls="yearTwo"><strong>Year Two</strong></li>

										<li class="btn btn-default col-xs-4" data-toggle="collapse" href="#tele_BTech" aria-expanded="false" aria-controls="BTech"><strong>BTech</strong></li>

									</ul>
									<!-- Year One Collapse Window begins here -->
									<div class="collapse" id="tele_yearOne">
								  		<div class="card card-block"><br>
			    							<h2>Year One Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information 	here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			  								</form>
			  							</div>
										</div><!-- End of Year One collapse window -->


									<!-- Year Two Collapse Window begins here -->
									<div class="collapse" id="tele_yearTwo">
			 			 				<div class="card card-block"><br>
			    							<h2>Year Two Entry</h2>
			    							<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			   								</form>
			  							</div>
									</div><!-- End of Year Two collapse window -->

									<!-- BTech Collapse Window begins here -->
									<div class="collapse" id="tele_BTech">
			 		 					<div class="card card-block">
			    							<h2>BTech</h2>
			   		 						<form method="post" action="">
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<div class="form-group">
			    									<input type="text" class="form-control" placeholder="Enter Information here">
			    								</div>
			    								<button type="submit" class="btn btn-success">Submit</button>
			    							</form>
			  							</div>
									</div><!-- End of BTech collapse window -->

								</div><!-- End of modal body -->
								
							</div>
						</div>
					</div>
					<!-- End of modal window for Networking edit -->
				</tr>
			</table>

		</div>
		<!-- End of school of engineering -->

				<!-- This div only provide space between enginering and business div -->
				<div class="col-xs-1"></div>
				<!-- End of div that provides space -->

				<!-- School of Business begins here -->
				<div class="business col-xs-12 col-sm-4 col-lg-4">
					<h1><i class="fa fa-book fa-2x"></i></h1>
					<h2><strong>Business</strong>
						<button type="button" class="btn btn-primary" data-target="#eng_edit" data-toggle="modal">Edit</button>
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
				<!-- End of school of Business -->

			<!-- Div to add a school begins here -->
			<div class="col-sm-1"><br>
				
			</div> 

		
	</div><!-- End of row -->
</div>
