<div class="container fluid">
<?php
	if (isset($uploadSuccess)) {
		echo "<h2 class'text-success'>Change successfully made</h2>";
	}
?>
	<div class="col-xs-3"></div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top: 6%">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="text-center">SCHOOL SETTINGS</h3>
			</div>
			<div  class="panel-body">
				<?php echo form_open_multipart('setting/save');?>

					<div class="form-group">
						<label for="Name of School" class="control-label col-xs-2 text-warning">School:</label> 
						<?php
							$data = array(
								'class' => 'form-control',
								'name' => 'school',
								'type' => 'text'
								);
						?>
						<div class="col-xs-9">
							<?php echo form_input($data);?>	
						</div>	<br><br>
					</div><!-- / Name of school -->

					<div class="form-group">
						<label for="School Logo" class="control-label col-xs-2 text-warning">Logo: </label>
						<?php
							$data = array(
								'name' => 'logo',
								'type' => 'file',
								'class' => 'btn btn-default'
								);
						?>
						<?php echo form_input($data);?>
						
					</div><!-- / logo -->
					<div class="form-group">
						<button type="submit" class="btn btn-warning col-xs-3 col-xs-offset-5">Submit</button>
					</div>
  			
				</form><!-- /Form -->
			</div><!-- / Panel body -->
		</div>
	</div><!-- / main Content -->

	<div class="col-xs-3"></div>
</div><!-- /Container -->
