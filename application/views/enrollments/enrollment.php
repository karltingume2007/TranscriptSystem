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
        <div class="alert alert-danger" ng-show="showNoRecordsFoundDisplayMessage">
        {{noRecordsFoundDisplayMessage}}
        </div>
        
        <div class="container" ng-controller="enrollmentController as controller">
            <div class="row">
                <div class="panel panel-default">
                    <form name="enrollment_search_criteria_form" class="form form-inline" ng-submit="search_enrollment()" novalidate="">
                        <div class="form-group">
                            <label class="control-label">Academic Year:</label>
                            <select name="academic_year" class="form-control" id="inputAcademicYear" ng-model="academicYear">
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
                            <select name="program" class="form-control" id="inputProgramDepartment" ng-model="departmentOrProgram">
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
                            <select name="level" class="form-control" ng-model="level">
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Student Name:</label>
                            <input class="form-control" type="search" name="search" placeholder="Enter Student Name" ng-model="studentName">
                            <input class="btn btn-default" type="submit" name="search" value="search">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-condensed table-striped table-hover col-md-9" ng-repeat="enrollment in controller.enrollments" ng-hide="showNoRecordsFoundDisplayMessage">
                            <th>Student Name</th>
                            <th>Mat. Number</th>
                            <th>Program</th>
                            <th>Level</th>
                            <tr>
                                <td>{{enrollment.students.studentName}}</td>
                                <td>{{enrollment.students.matricule}}</td>
                                <td>{{enrollment.schoolprograms.programName}}</td>
                                <td>{{enrollment.level}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    
</html>

