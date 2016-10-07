<div ng-controller="marksController as controller">
    <div class="container">           
         
        <!--Modal dialog for editing student's course marks-->
        <div class="modal fade" id="addEditStudentCourseMarkForm" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="form-horizontal" name="addEditStudentCourseMarkForm" novalidate>
                            <div class="form-group">
                                <label for="inputCourseName" class="control-label col-xs-4">Course Name:</label>
                                <div class="col-md-8">
                                <select class="form-control" id="inputProgram" ng-model="current_student_course.courseId">
                                    <option ng-repeat="course in studentCourses" value="{{course.courseId}}">{{course.course[0].courseName}}</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="caMark" class="control-label col-xs-4">CA Mark:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="caMark" type="text" ng-model="current_student_course.caMark">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="examMark" class="control-label col-xs-4">Exam Mark:</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="examMark" ng-model="current_student_course.examMark">
                                </div>
                            </div>                            
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-xs-offset-3 col-xs-3" ng-click="save_current_student_course(current_student_course)">SAVE</button>
                            <button type="button" class="btn btn-danger col-xs-offset-1 col-xs-3" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!--End of modal dialog to edit student's course marks-->
        
        
        <div class="row">            
                <div class="panel panel-default">
                <form name="student_course_search_criteria_form" class="form form-inline" novalidate>
                    <div class="form-group">
                        <label class="control-label">Academic Year:</label>
                        <select name="academic_year" class="form-control" id="inputAcademicYear" ng-model="criteria_academicYear">
                             <!--Add logic that autogenerates this list-->
                            <option value="2010/2011">2010/2011</option>
                            <option value="2011/2012">2011/2012</option>
                            <option value="2012/2013">2012/2013</option>
                            <option value="2013/2014">2013/2014</option>
                            <option value="2014/2015">2014/2015</option>
                            <option value="2015/2016">2015/2016</option>
                        </select>
                    </div>                    
                    
                    <div class="form-group">
                        <label class="control-label">course:</label>
                        <select name="course" class="form-control" id="inputCourse" ng-model="criteria_courseId">
                            <option ng-repeat="course in allCourses" value="{{course.courseId}}">{{course.courseName}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Level:</label>
                        <select name="level" class="form-control" ng-model="criteria_level">
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Student Name:</label>
                        <input class="form-control" type="search" name="search" placeholder="Enter Student Name" ng-model="criteria_studentName">
                        <button class="btn btn-default" type="button" name="search" value="search" ng-click="search_studentCourses()">Search</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-condensed table-striped table-hover col-md-9" ng-show="showNoRecordsFoundDisplayMessage">
                        <th>Student Name</th>
                        <th>Mat. Number</th>
                        <th>CA Mark</th>
                        <th>Exam Mark</th>
                        <tr ng-repeat="studentCourse in studentCourses" data-target='#addEditStudentCourseMarkForm' data-toggle="modal" ng-click="set_current_studentCourse(studentCourse)">
                            <td>{{studentCourse.student[0].studentName}}</td>
                            <td>{{studentCourse.student[0].matricule}}</td>
                            <td>{{studentCourse.caMark}}</td>
                            <td>{{studentCourse.examMark}}</td>
                        </tr>
                    </table>
                    
                    <div ng-show="showNoRecordsFoundDisplayMessage">{{noRecordsFoundDisplayMessage}}</div>
                </div>
            </div>
        </div>
    </div>                    
</div>






