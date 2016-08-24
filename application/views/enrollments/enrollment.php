<!DOCTYPE html>
<html>
    <head>
        <title>Enrollment</title>
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
                <div class="panel panel-default">
                    <form class="form form-inline">
                        <div class="form-group">
                            <label class="control-label">Academic Year:</label>
                            <select name="academic_year" class="form-control" id="inputAcademicYear">
                                <!-- Add logic that autogenerates this list-->
                                <option value="2010/2011">2010/2011</option>
                                <option value="2011/2012">2011/2012</option>
                                <option value="2012/2013">2012/2013</option>
                                <option value="2013/2014">2013/2014</option>
                                <option value="2014/2015">2014/2015</option>
                                <option value="2015/2016">2015/2016</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Department/Program:</label>
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
                        <div class="form-group">
                            <label class="control-label">Level:</label>
                            <select name="level" class="form-control">
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Student Name:</label>
                            <input class="form-control" type="search" name="search" placeholder="Enter Student Name">
                            <input class="btn btn-default" type="button" name="search" value="search">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-condensed table-striped table-hover col-md-9" d>
                            <th>Student Name</th>
                            <th>Mat. Number</th>
                            <th>Program</th>
                            <th>Level</th>
                            <!-- Add logic that picks this up from the db and creates a clickable row for each record-->
                            <tr>
                                <td>Karl Tingume</td>
                                <td>FPSE12345</td>
                                <td>Software Engineering</td>
                                <td>Level 3</td>
                            </tr>
                            <tr>
                                <td>Titus Yusinyu</td>
                                <td>FPSE54321</td>
                                <td>ICT</td>
                                <td>Level 2</td>
                            </tr>
                            <tr>
                                <td>Michael Fossung</td>
                                <td>FPSE54231</td>
                                <td>Accounting</td>
                                <td>Level 1</td>
                            </tr>
                            <tr>
                                <td>Ebune Joseph</td>
                                <td>FPSE32145</td>
                                <td>Electric Engineering</td>
                                <td>Level 2</td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    
</html>

