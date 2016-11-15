<div ng-controller="enrolmentController as controller">
    <div class="container">
        
        <!--All Enrolments-->
        <div class="row">
            <button type="button" class="btn btn-primary" data-target='#AddEnrolment' data-toggle="modal" ng-click="create_new_enrolment()"><i class="fa fa-plus"></i> New Enrolment</button> 
            <button type="button" class="btn btn-success" data-target="#AddEditStudent" data-toggle="modal" ng-click="create_new_student()"><i class="fa fa-graduation-cap"></i>  New Student</button>
            <br><br>
            
            <form class="form form-inline form-horizontal">
                <label> Academic Year:
                    <select ng-model="filter.academic_year" ng-change="get_enrolments()"class="form-control input-sm">
                        <option ng-repeat="year in allAcademicYears" value="{{year.year_value}}">
                            {{year.year_name}}
                        </option>
                    </select>
                </label>
                <label>Program:
                    <select ng-model="filter.program_id" ng-change="get_enrolments()" class="form-control input-sm">
                        <option ng-repeat="program in allPrograms" value="{{program.program_id}}">
                            {{program.program_and_school}}
                        </option>
                    </select>
                </label>
                <label>Level:
                    <select ng-model="filter.level_id" ng-change="get_enrolments()" class="form-control input-sm">
                        <option ng-repeat="level in allLevels" value="{{level.level_id}}">
                            {{level.level_name}}
                        </option>
                    </select>
                </label>
                
                <button class="btn btn-primary" ng-click="get_enrolments()">Search</button>
                <button class="btn btn-danger" ng-click="clearFilter()">Clear</button>
                
            </form>
            
            <hr/>
            
            <table class="table table-bordered table-hover table-responsive">
                <thead style="background-color: #333; color:#fff;">
                    <th>Matricule</th>
                    <th>Student</th>
                    <th>Level</th>
                    <th>Program</th>
                    <th>Academic Year</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr ng-repeat="enrolment in all_enrolments">
                        <td>{{enrolment.matricule}}</td>
                        <td>{{enrolment.student_name}}</td>
                        <td>{{enrolment.level_name}}</td>
                        <td>{{enrolment.program_name}}</td>
                        <td>{{enrolment.academic_year}}</td>
                        <td>
                            <buttonz class="btn btn-success btn-xs" style="width:100%"
                                    data-target="#addEditSchool" data-toggle="modal">
                                more
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!--AddEditStudent-->
        <div class="modal fade" id="AddEditStudent"
             role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 style="text-decoration: underline"> 
                            <span class="fa fa-graduation-cap"></span> 
                            Add or Edit Student
                        </h4>
                    </div>

                    <div class="modal-body">
                      <form>
                            <label for="inputStudentName" class="control-label" style="width:45%">Student Name:
                                <input type="text" class="form-control input-sm" ng-model="current_student.student_name">
                            </label>
                           
                           <label for="inputStudentName" class="control-label" style="width:45%">Matricule:
                                <input type="text" class="form-control input-sm" ng-model="current_student.matricule">
                            </label>
                           
                            <label for="inputGender" class="control-label" style="width:45%">Gender:
                                <select class="form-control input-sm" ng-model="current_student.gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </label>
                           
                            <label for="inputDateOfBirth" class="control-label" style="width:45%">Date of Birth:
                                <input class="form-control input-sm" type="date" ng-model="current_student.date_of_birth">
                            </label>
                           
                            <label for="inputDateOfBirth" class="control-label" style="width:45%">Email:
                                <input class="form-control input-sm" type="email" ng-model="current_student.email">
                            </label>
                           
                            <label for="inputDateOfBirth" class="control-label" style="width:45%">Phone Number:
                                <input class="form-control input-sm" type="number" ng-model="current_student.phone_number">
                            </label>
                           
                            <label for="inputDateOfBirth" class="control-label" style="width:45%">Address:
                                <input class="form-control input-sm" type="text" ng-model="current_student.address">
                            </label>
                        </form>
                    </div> 

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" ng-click="save_student(current_student)">SAVE</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="clear_student()">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!--AddEnrolment-->
        <div class="modal fade" id="AddEnrolment"
             role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                        
                        <form name="new_enrolment_form" ng-submit="add_enrolment(new_enrolment)" novalidate>
                            {{new_enrolment}}
                            <fieldset>
                              Student: <input type="text" ng-model="student_search_keyword"  class="form-control input-sm"
                                   ng-change="search_student(student_search_keyword)" ng-model-options='{ debounce: 500 }' /> 
                                    
                                <div ng-show="current_student === null">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <th>Matricule</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="student in students">
                                                <td>{{student.matricule}}</td>
                                                <td>{{student.student_name}}</td>
                                                <td>{{student.gender}}</td>
                                                <td>
                                                    <button class="btn btn-success btn-xs" ng-click="set_current_student(student)" 
                                                            style="width:100%">
                                                        Select
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div ng-show="current_student != null">

                                    <img ng-src="{{get_student_avatar(current_student)}}" style="float:left; width: 50px; height: 50px;"/>
                                    <span>
                                    {{current_student.student_name}} ({{current_student.matricule}})
                                    <br />
                                    Date of Birth: {{current_student.date_of_birth |date:'dd MMM YYYY'}}
                                    </span>
                                    <input type="text" ng-model="new_enrolment.student_id" required style="display:none;"/>
                                </div>
                            
                              <br /><br />
                                Academic Year:
                                <select ng-model="new_enrolment.academic_year" class="form-control input-sm" required>
                                  <option ng-repeat="year in allAcademicYears" value="{{year.year_value}}">
                                      {{year.year_name}}
                                  </option>
                                </select>
                            
                              <br />
                                Program:
                                <select ng-model="new_enrolment.program_id" class="form-control input-sm" required>
                                    <option ng-repeat="program in allPrograms" value="{{program.program_id}}">
                                        {{program.program_and_school}}
                                    </option>
                                </select>
                            
                              <br />
                                Level:
                                <select ng-model="new_enrolment.level_id" ng-change="get_enrolments()" class="form-control input-sm" required>
                                    <option ng-repeat="level in allLevels" value="{{level.level_id}}">
                                        {{level.level_name}}
                                    </option>
                                </select>
                                
                                <br />
                                
                                <input type="submit" value="Save"  class="form-control input-sm btn btn-success" 
                                       ng-disabled="new_enrolment_form.$invalid" ng-click="save_enrolment(new_enrolment)"/>                                
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>                    
</div>





