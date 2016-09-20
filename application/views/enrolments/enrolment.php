<div ng-controller="enrolmentController as controller">
    <div class="container">
        <div class="row">
            <div>
                <button type="button" class="btn btn-primary" data-target='#addEnrolment' data-toggle="modal" ng-click="create_new_enrolment()"><i class="fa fa-plus"></i> New Enrolment</button> 
                <button type="button" class="btn btn-success" data-target="#addStudent" data-toggle="modal" ng-click="create_new_student()"><i class="fa fa-plus"></i>  New Student</button>
                <br><br>
            </div>
        </div>
        
        <!-- modal dialog for adding a new enrolment-->
        <div class="modal fade" id="addEnrolment" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="form-horizontal" name="addEnrolmentForm">
                            <div class="form-group">
                                <label for="inputStudentName" class="control-label col-xs-4">Student Name:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputStudentName" placeholder="Enter Student Name" ng-model="current_enrolment.studentName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="program" class="control-label col-xs-4">Program:</label>
                                <div class="col-md-6">                                    
                                    <select name="program" class="form-control" id="inputProgram" placeholder="Select Program" ng-model="current_enrolment.programId">
                                    <option ng-repeat="program in allPrograms" value="{{program.programId}}">{{program.programName}}</option>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level" class="control-label col-xs-4">Level:</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="inputLevel" placeholder="Select level" ng-model="current_enrolment.level" required>
                                        <option value="Level 1">Level 1</option>
                                        <option value="Level 2">Level 2</option>
                                        <option value="Level 3">Level 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="academicYear" class="control-label col-xs-4">Academic Year:</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="inputAcademicYear" placeholder="Select Academic Year" ng-model="current_enrolment.academicYear" required>
                                        <option value="2010/2011">2010/2011</option>
                                        <option value="2011/2012">2011/2012</option>
                                        <option value="2012/2013">2012/2013</option>
                                        <option value="2013/2014">2013/2014</option>
                                        <option value="2014/2015">2014/2015</option>
                                        <option value="2015/2016">2015/2016</option>
                                    </select>
                                </div>
                            </div>                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-xs-offset-3 col-xs-3" ng-click="addEnrolmentForm.$valid && save_enrolment(current_enrolment)">SAVE</button>
                            <button type="button" class="btn btn-danger col-xs-offset-1 col-xs-3" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!--End of modal dialog for adding a new student-->
        
        <!--Modal dialog for adding a new student-->
        <div class="modal fade" id="addStudent" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="form-horizontal" name="addStudentForm" novalidate>
                            <div class="form-group">
                                <label for="inputStudentName" class="control-label col-xs-4">Student Name:</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="inputStudentName" placeholder="Enter Student Name" ng-model="current_student.studentName" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMatricule" class="control-label col-xs-4">Matricule Number:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="inputMatricule" type="text" ng-model="current_student.matricule" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="inputGender" class="control-label col-xs-4">Gender:</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="inputGender" placeholder="Select gender" ng-model="current_student.gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDateOfBirth" class="control-label col-xs-4">Date of Birth:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="inputDateOfBirth" type="date" ng-model="current_student.dateofBirth" required>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label for="inputEmail" class="control-label col-xs-4">Email:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="inputEmail" type="email" ng-model="current_student.email" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="inputPhoneNumber" class="control-label col-xs-4">Phone Number:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="inputPhoneNumber" type="tel" ng-model="current_student.phoneNumber" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="inputAddress" class="control-label col-xs-4">Address:</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="inputAddress" type="text" ng-model="current_student.address" required></textarea>
                                </div>
                            </div> 
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-xs-offset-3 col-xs-3" ng-click="addStudentForm.$valid && save_student(current_student)">SAVE</button>
                            <button type="button" class="btn btn-danger col-xs-offset-1 col-xs-3" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!--End of modal dialog to add a new student-->
        
        
        <div class="row">            
                <div class="panel panel-default">
                <form name="enrollment_search_criteria_form" class="form form-inline" ng-submit="search_enrollment()" novalidate="">
                    <div class="form-group">
                        <label class="control-label">Academic Year:</label>
                        <select name="academic_year" class="form-control" id="inputAcademicYear" ng-model="academicYear">
                             Add logic that autogenerates this list
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
                        <select name="program" class="form-control" id="inputProgram" ng-model="enrolments.programId">
                            <option ng-repeat="program in allPrograms" value="program.programId">{{program.programName}}</option>
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
                        <button class="btn btn-default" type="button" name="search" value="search" ng-click="search_enrolment()">Search</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-condensed table-striped table-hover col-md-9" ng-show="showNoRecordsFoundDisplayMessage">
                        <th>Student Name</th>
                        <th>Mat. Number</th>
                        <th>Program</th>
                        <th>Level</th>
                        <tr ng-repeat="enrollment in enrollments">
                        <a href="<?php echo base_url('enrolment/edit_enrolment/enrolment'); ?>">
                            <td>{{enrollment.studentId}}</td>
                            <td>{{enrollment.enrollmentId}}</td>
                            <td>{{enrollment.schoolprogramId}}</td>
                            <td>{{enrollment.level}}</td>
                        </a>
                        </tr>
                    </table>
                    
                    <div ng-show="showNoRecordsFoundDisplayMessage">{{noRecordsFoundDisplayMessage}}</div>
                </div>
            </div>
        </div>
    </div>                    
</div>





