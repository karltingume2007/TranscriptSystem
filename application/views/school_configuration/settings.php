<div  ng-controller="SchoolConfigController as controller">
   <div class="col-xs-2"></div>

	<div class="col-xs-7" style="border:1px solid #ccc; padding:3% 1% 3% 1%;">

		<?php echo $error;?>
		<?php echo form_open_multipart('');?>
			<div class="form-group">
				<label for="Name of School">School:</label>
				<input type="text" name="school" class="form-control">
			</div>
			<div class="form-group">
				<label for="School Logo">Logo: </label>
				<input type="file" file-model = "myFile">
				<!-- Add Logic that accepts only a picture format -->
			</div>
			<br>
  			<div class="form-group">
  				<button type="submit" ng-click = "uploadFile()" class="btn btn-primary btn-block">Submit</button>
  			</div>
  			
		</form>
	</div>

	<div class="col-xs-3">
		
	</div>

</div>
