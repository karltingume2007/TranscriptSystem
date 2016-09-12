<div ng-controller="enrollmentController as controller" ng-init="bind_default_data()">
    <div class="container">
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
                        <select name="program" class="form-control" id="inputProgram" ng-model="programId" ng-repeat="program in controller.programs">
                            <option value="{{program.programId}}">{{program.programName}}</option>
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
                    <table class="table table-bordered table-condensed table-striped table-hover col-md-9" ng-repeat="enrollment in controller.enrollments" ng-show="showNoRecordsFoundDisplayMessage">
                        <th>Student Name</th>
                        <th>Mat. Number</th>
                        <th>Program</th>
                        <th>Level</th>
                        <tr>
                        <a href="<?php echo base_url('enrollment/edit_enrollment/enrollment'); ?>">
                            <td>{{enrollment.students.studentName}}</td>
                            <td>{{enrollment.students.matricule}}</td>
                            <td>{{enrollment.schoolprograms.programName}}</td>
                            <td>{{enrollment.level}}</td>
                        </a>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>                    
</div>


