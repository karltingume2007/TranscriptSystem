<!DOCTYPE html>
<html>
    <head>
        <title>New Enrollment</title>
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
                                    <label for="programOrDepartment" class="control-label col-xs-4">Department/Program:</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="inputProgramDepartment" placeholder="Enter Department/Program">
                                            <option value="ee"> Software Engineering </option>
                                            <option value="ict">Information Communication Technology (ICT)</option>
                                            <option value="ee">Electrical Engineering</option>
                                            <option value="networking">Network</option>
                                            <option value="telecom">Telecom</option> 
                                            <option value="telecom">Accounting</option> 
                                            <option value="telecom">Management</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="level" class="control-label col-xs-4">Level:</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="inputLevel" placeholder="Select level">
                                            <option value="1">Level 1</option>
                                            <option value="2">Level 2</option>
                                            <option value="3">Level 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="academicYear" class="control-label col-xs-4">Academic Year:</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="inputAcademicYear" placeholder="Select Academic Year">
                                            <option value="2010/2011">2010/2011</option>
                                            <option value="2011/2012">2011/2012</option>
                                            <option value="2012/2013">2012/2013</option>
                                            <option value="2013/2014">2013/2014</option>
                                            <option value="2014/2015">2014/2015</option>
                                            <option value="2015/2016">2015/2016</option>
                                        </select>
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

