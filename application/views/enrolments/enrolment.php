<div ng-controller="enrolmentController as controller">
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-primary" data-target='#addEnrolment' data-toggle="modal" ng-click="create_new_enrolment()"><i class="fa fa-plus"></i> New Enrolment</button> 
            <button type="button" class="btn btn-success" data-target="#addStudent" data-toggle="modal" ng-click="create_new_student()"><i class="fa fa-plus"></i>  New Student</button>
            <br><br>
            
            <form class="form form-inline form-horizontal">
                <label> Academic Year:
                    <select ng-model="selectedYear" ng-change="getEnrollments()"class="form-control input-sm">
                        <option ng-repeat="year in allAcademicYears" value="{{year.year_value}}">
                            {{year.year_name}}
                        </option>
                    </select>
                </label>
                <label>Program:
                    <select ng-model="selectedProgramId" ng-change="getEnrollments()" class="form-control input-sm">
                        <option ng-repeat="program in allPrograms" value="{{program.program_id}}">
                            {{program.program_and_school}}
                        </option>
                    </select>
                </label>
                <label>Level:
                    <select ng-model="selectedLevelId" ng-change="getEnrollments()" class="form-control input-sm">
                        <option ng-repeat="level in allLevels" value="{{level.level_id}}">
                            {{level.level_name}}
                        </option>
                    </select>
                </label>
            </form>
            
        </div>
        
    </div>                    
</div>





