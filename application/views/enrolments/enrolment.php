<div ng-controller="enrolmentController as controller">
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-primary" data-target='#addEnrolment' data-toggle="modal" ng-click="create_new_enrolment()"><i class="fa fa-plus"></i> New Enrolment</button> 
            <button type="button" class="btn btn-success" data-target="#addStudent" data-toggle="modal" ng-click="create_new_student()"><i class="fa fa-plus"></i>  New Student</button>
            <br><br>
            
            <form class="form form-inline form-horizontal">
                <label> Academic Year:
                    <select ng-model="filter.academic_year" ng-change="getEnrollments()"class="form-control input-sm">
                        <option ng-repeat="year in allAcademicYears" value="{{year.year_value}}">
                            {{year.year_name}}
                        </option>
                    </select>
                </label>
                <label>Program:
                    <select ng-model="filter.program_id" ng-change="getEnrollments()" class="form-control input-sm">
                        <option ng-repeat="program in allPrograms" value="{{program.program_id}}">
                            {{program.program_and_school}}
                        </option>
                    </select>
                </label>
                <label>Level:
                    <select ng-model="filter.level_id" ng-change="getEnrollments()" class="form-control input-sm">
                        <option ng-repeat="level in allLevels" value="{{level.level_id}}">
                            {{level.level_name}}
                        </option>
                    </select>
                </label>
                
                <button class="btn btn-primary" ng-click="getEnrollments()">Search</button>
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
                    <tr ng-repeat="enrollment in all_enrollments">
                        <td>{{enrollment.matricule}}</td>
                        <td>{{enrollment.student_name}}</td>
                        <td>{{enrollment.level_name}}</td>
                        <td>{{enrollment.program_name}}</td>
                        <td>{{enrollment.academic_year}}</td>
                        <td>
                            <button class="btn btn-success btn-xs" style="width:100%"
                                    data-target="#addEditSchool" data-toggle="modal">
                                more
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>                    
</div>





