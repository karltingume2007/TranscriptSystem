<div  ng-controller="SchoolConfigController as controller" ng-init="getAllSchools()">
    
    <div class="add_school col-sm-12"><br>
        <button type="button" class="btn btn-primary col-xs-5"  
                data-target="#addEditSchool" data-toggle="modal" ng-click="addSchool()">
            <i class="fa fa-plus"></i> Add School
        </button>
    </div>

    <!--All Schools-->
    <div ng-repeat="school in allSchools" 
         style="display: inline-block; margin: 5px; 
         padding:0px 20px 0px 20px; background-color: #eee">
        
        <h1><i class="fa fa-book fa-2x"></i></h1>
        
        <h2><strong>{{school.school_name}}</strong>
            <button type="button" class="btn btn-success" data-target="#addEditSchool"
                    data-toggle="modal"  ng-click="setCurrentSchool(school)">
                <span class="fa fa-pencil"></span> 
            </button>
<!--            <button type="button" class="btn btn-danger" data-target="#addEditSchool"
                    data-toggle="modal"  ng-click="setCurrentSchool(school)">
                <span class="fa fa-remove"></span> 
            </button>-->
        </h2><br>

        <!-- Table to Display Departments -->
        <table  class="table table-bordered table-striped table-hover col-xs-12">
            <tr ng-repeat="program in school.school_programs">
                <td> <span class="fa fa-plus"></span>   {{program.program_name}} </td>
            </tr>
        </table>
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
