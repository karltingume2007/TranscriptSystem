<!DOCTYPE html>
<html>
    <head>
        <title>New Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Link bootstrap to the page -->
        <!-- Bootstrap Core CSS -->
        <link href= "<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputStudentName" class="control-label col-xs-4">Student Name:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="inputStudentName" placeholder="Enter Student Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputGender" class="control-label col-xs-4">Gender:</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="inputGender" placeholder="Female">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDateOfBirth" class="control-label col-xs-4">Date of Birth:</label>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputDateOfBirth" type="date">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary col-xs-offset-2 col-xs-3">SAVE</button>
                                    <button type="button" class="btn btn-danger col-xs-offset-1 col-xs-3">CANCEL</button>
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div>                              
            </div>                                                         
        </div>
    </body>
    
</html>


