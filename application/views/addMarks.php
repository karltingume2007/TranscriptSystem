<!DOCTYPE html>
<html>
    <head>
        <title>Add Marks</title>
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
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-4">Course:</label>
                                <div class="col-md-6">
                                <select name="course" class="form-control" id="inputcourse">
                                    <!-- Add logic that autogenerates this list-->
                                    <option value="Programming">Programming</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="French">French</option>
                                    <option value="RelationalDatabase">Relational Database</option>
                                    <option value="WebDesign">Web Design</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Department/Program:</label>
                                <div class="col-md-6">
                                <select name="program" class="form-control" id="inputProgramDepartment">
                                    <!-- Add logic that picks this up from the db-->
                                    <option value="se">Software Engineering</option>
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
                                <label class="control-label col-xs-4">Level:</label>
                                <div class="col-md-6">
                                <select name="level" class="form-control">
                                    <option value="1">Level 1</option>
                                    <option value="2">Level 2</option>
                                    <option value="3">Level 3</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Semester:</label>
                                <div class="col-md-6">
                                <select name="semester" class="form-control">
                                    <option value="1">First Semester</option>
                                    <option value="2">Second Semester</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">CA:</label>
                                <div class="col-md-6">
                                <input name="ca" class="form-control" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Exam:</label>
                                <div class="col-md-6">
                                <input name="exam" class="form-control" type="number">
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
    </body>
    
</html>



