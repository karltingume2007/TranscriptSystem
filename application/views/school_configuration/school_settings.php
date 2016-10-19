<div  ng-controller="SchoolConfigController as controller" ng-init="getAllSchools()">
    
    
    <div class="add_school col-sm-12"><br>
        <button type="button" class="btn btn-primary col-xs-5"  
                data-target="#addEditSchool" data-toggle="modal" ng-click="addSchool()">
            <i class="fa fa-plus"></i> Add School
        </button>
    </div>
    
    <!--All Schools-->
    <div ng-repeat="school in allSchools" style="display: inline-block; margin: 5px; padding:0px 20px 0px 20px; background-color: #eee">
        
        <h1><i class="fa fa-home fa-2x"></i></h1>
        
        <h2><strong>{{school.school_name}}</strong>
            <button type="button" class="btn btn-success" data-target="#addEditSchool"
                    data-toggle="modal"  ng-click="setCurrentSchool(school)">
                <span class="fa fa-pencil"></span> 
            </button>
        </h2><br>

        <!-- Table to Display Departments -->
        <table  class="table table-bordered table-striped table-hover col-xs-12">
            <tr ng-repeat="program in school.school_programs">
                <td> <span class="fa fa-plus"></span>   {{program.program_name}} </td>
                <td>
                    <a  href="#" data-target="#viewEditSchoolProgram"
                            data-toggle="modal"  ng-click="setCurrentProgram(program)">
                        <span class="fa fa-book"></span>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    

    
    
        <!--ViewEditSchoolProgram-->
    <div class="modal fade" id="viewEditSchoolProgram"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 style="text-align: center; color: #d33;">{{currentProgram.program_name}}</h3>

                </div>
                                            
                <div class="modal-body">
                    <ul class="nav nav-pills">
                        <li ng-repeat="level in currentProgram.levels" 
                            ng-class="{active:isVisibleLevel(level.level_id)}">
                            <a href="#" ng-click="setVisibleLevel(level.level_id)">{{level.level_name}}</a>
                        </li>
                    </ul>
                    <br/>
                    
                    <div ng-repeat="level in currentProgram.levels"  ng-show="isVisibleLevel(level.level_id)">

                        <h3> 
                            <span class="fa fa-book"></span> 
                            Courses in {{level.level_name}}
                        </h3>
                        
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Credit Value</th>
                                <th>Semester</th>
                                <th></th>
                            </thead>
                            <tr ng-repeat="course in level.courses">
                                <td>{{course.course_code}}</td>
                                <td>{{course.course_name}}</td>
                                <td>{{course.credit_value}}</td>
                                <td>{{course.semester}}</td>
                                <td>
                                    <a href="#" data-target="#addEditProgramCourse" data-toggle="modal"
                                       ng-click="setCurrentProgramCourseAndLevel(course, level)">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" ng-show="noCoursesInLevel(level)">No courses registered in this level</td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <button type="submit" class="btn btn-primary btn-block"
                                            ng-click="canAddNewCourse = true">
                                        <span class="fa fa-plus"></span> ADD
                                    </button>
                                    <div ng-show="canAddNewCourse === true">
                                        <select ng-model="selectedCourse">
                                            <option ng-repeat="course in AllCourses" value="{{course}}">
                                                {{course.course_code}} - {{course.course_name}}
                                            </option>
                                        </select>
                                        <a href="#" ng-click="addCourseToLevel(selectedCourse, level)"
                                           ng-show="selectedCourse">
                                            Add Selected <span class="fa fa-plus-square"></span> 
                                        </a>
                                        &nbsp;&nbsp;|&nbsp;&nbsp;
                                        
                                        <a href="#" data-target="#addEditProgramCourse" data-toggle="modal"
                                           ng-click="createNewCourse(level)">
                                            <span class="fa fa-book"></span> Create New Course
                                        </a>
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr ng-show="courseExists">
                                <td style="color:red;">Course is already in the list</td>
                            </tr>
                        </table>
                    </div>              
                </div> 
                                            
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal"
                                ng-click="saveSchoolProgram(currentProgram)">
                            <span class="fa fa-save"></span> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        
    
        
         <!--AddEditProgramCourse-->
    <div class="modal fade" id="addEditProgramCourse"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 style="text-decoration: underline"> 
                        <span class="fa fa-paperclip"></span> 
                        {{currentCourse.program_name}} - {{currentCourse.level_name}}
                    </h4>
                </div>
                                            
                <div class="modal-body">
                   <form class="form">
                       <label class="form-control"> Course Code
                           <input type="text" ng-model="currentCourse.course_code" />
                       </label>
                       <label class="form-control"> Course Name
                           <input type="text" ng-model="currentCourse.course_name" />
                       </label>
                       <label class="form-control"> Credit Value
                           <input type="text" ng-model="currentCourse.credit_value" />
                       </label>
                       <label class="form-control"> Semester
                           <select ng-model="currentCourse.semester">
                               <option value="1">First</option>
                               <option value="2">Second</option>
                           </select>
                       </label>
                   </form>
                </div> 
                                            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">
                        <span class="fa fa-save"></span> Apply Changes
                    </button>
                    <button type="submit" class="btn btn-danger"
                            ng-click="currentCourse.isRemovable = true">
                        <span class="fa fa-remove"></span> Remove Course
                    </button>

                    <div ng-show="currentCourse.isRemovable === true">
                        Are you sure?
                        <a href="#" ng-click="currentCourse.isRemovable = false">
                            NO <span class="fa fa-close"></span>
                        </a>
                        <a style="color:red;" href="#" data-dismiss="modal" ng-click="removeCourseFromProgram(currentCourse)">
                            YES <span class="fa fa-check"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        
        
    
    
    
        <!--addEditSchool-->
    <div class="modal fade" id="addEditSchool" tabindex="-1" 
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                                            <!-- Header -->
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 style="text-align: center; color: #d33;">Add/Edit School</h3>

                </div>
                                            
                <div class="modal-body">
                    
                    <label for="Name">Name: </label>
                    <input type="text" class="form-control" name="name_school"
                        placeholder="Enter name of school" ng-model="currentSchool.school_name">
                    
                    
                    <table class="table table-bordered table-striped table-hover col-xs-12">
                        <thead>
                        <th  colspan="2">School Programs</th>
                        </thead>
                        <tbody>
                            <tr ng-repeat="program in currentSchool.school_programs">
                                <td>
                                    <input type="text" ng-model="program.program_name" class="form-control" />
                                </td>
                                <td>
                                    <a href="#" style="color:red" ng-click="setAsDeletable(program)">
                                        Delete  <span class="fa fa-remove"></span>
                                    </a><br/>
                                    <span ng-show="isDeletableProgram(program)">
                                        Are you sure?
                                        <a href="#" ng-click="deleteProgram(program)">Yes</a>
                                         | 
                                         <a href="#" ng-click="unSetDeletableProgram()">No</a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn btn-warning form-control" ng-click="addProgram()">
                                        Add Program  <span class="fa fa-plus"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    &nbsp;

                </div> 
                                            
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" data-dismiss="modal"
                                ng-click="saveSchool(currentSchool)">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
