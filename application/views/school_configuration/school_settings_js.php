<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('SchoolConfigController', function($scope, $http, $window)
{
    $scope.siteURL = '<?php echo site_url();?>';
    $scope.showMessageLabel = false;
    $scope.showWaitForm = false;
    $scope.allSchools = [];
    
    $scope.getAllSchools = function(){
       $scope.showWaitForm = true;
        var url = $scope.siteURL + '/school_settings/get_all_schools/';
        
        $http.get(url).success(function(result)
        {
            $scope.showWaitForm = false;
            $scope.allSchools = result;
        })
        .error(function (data, status, headers, config) 
        {
            $scope.showWaitForm = false;
        });
    };
    
    $scope.addSchool = function(){
        var school = {};
        school.school_programs = [];
        $scope.setCurrentSchool(school);
    };
    
    $scope.setCurrentSchool = function(school){
        $scope.currentSchool = school;
    };
    
    $scope.setCurrentProgram = function(program){
        
        $scope.currentProgram = program;
        $scope.showWaitForm = true;
        
        var url = $scope.siteURL + '/school_settings/get_program_course_levels/' + $scope.currentProgram.program_id;
        
        $http.get(url).success(function(result)
        {
            $scope.currentProgram.levels = result;
            $scope.showWaitForm = false;
        })
        .error(function(data, status, headers, confir)
        {
            $scope.showWaitForm = false;
        });
        
    }
    
    $scope.setVisibleLevel = function(level_id){
        $scope.visibleLevel = level_id;
    };
    
    $scope.isVisibleLevel = function(level_id){
        return $scope.visibleLevel === level_id;
    };
    
    $scope.noCoursesInLevel = function(level){
        return level.courses.length === 0;
    }
    
    $scope.setAsDeletable = function(program){
        $scope.deletableProgram = program;
    };
    
    $scope.unSetDeletableProgram = function(){
        $scope.deletableProgram = [];
    };
    
    $scope.isDeletableProgram = function(program){
        return $scope.deletableProgram === program;
    };
    
    $scope.deleteProgram = function(program){
        var index = $scope.currentSchool.school_programs.indexOf(program);
        return $scope.currentSchool.school_programs.splice(index, 1);
    };
    
    $scope.addProgram = function(){
        var newProgram = {};
        $scope.currentSchool.school_programs.push(newProgram);
    };
    
    $scope.saveSchool = function(school){
        //if it's a new school, add it to the list before saving
        if(!school.school_id > 0){
            $scope.allSchools.push(school);
        }
        
        $scope.showWaitForm = true;
        var jsonObject = angular.toJson(school);
        var url = $scope.siteURL + '/school_settings/save_school/';
        
        $http({
                method: 'POST',
                url: url,
                data: jsonObject
                }).success(function (savedSchool, status, headers, config) {
                    $scope.showWaitForm = false;
                    school = savedSchool;
                })
                .error(function (data, status, headers, config) 
                {
                    $scope.showWaitForm = false;
                });
    }
    
    $scope.deleteSchool = function(school){
        var index = $scope.allSchools.indexOf(school);
        $scope.allSchools.splice(index, 1);
    };
    
    $scope.setCurrentProgramCourseAndLevel = function(programCourse, level){
        $scope.currentLevel = level;
        $scope.currentCourse = programCourse;
        $scope.currentCourse.level_name = level.level_name;
        $scope.currentCourse.isRemovable = false;
    };
    
    $scope.getAllCourses = function()
    {
        $scope.showWaitForm = true;
        var url = $scope.siteURL + '/school_settings/get_all_courses';
        $http.get(url).success(function(result)
        {
            $scope.AllCourses = result;
            $scope.showWaitForm = false;
        })
        .error(function(data, status, headers, confir)
        {
            $scope.showWaitForm = false;
        });
    };
    
    $scope.getAllCourses();
    
    $scope.removeCourseFromProgram = function(course){
        var index = $scope.currentLevel.courses.indexOf(course);
        $scope.currentLevel.courses.splice(index, 1);
    }
    
    $scope.addCourseToLevel = function(course, level)
    {
        $scope.courseExists = false;
        
        var newcourse = JSON.parse(course);
        
        for(var i = 0; i < level.courses.length; i++)
        {
            if(level.courses[i].course_id === newcourse.course_id)
            {
                $scope.courseExists = true;
                return;
            }
        }
                
        var courseToAdd = {};
        courseToAdd.program_id = $scope.currentProgram.program_id;
        courseToAdd.course_id = newcourse.course_id;
        courseToAdd.credit_value = newcourse.credit_value;
        courseToAdd.level_id = level.level_id;
        courseToAdd.semester = "1";
        courseToAdd.program_name = $scope.currentProgram.program_name;
        courseToAdd.school_id = $scope.currentProgram.school_id;
        courseToAdd.course_name = newcourse.course_name;
        courseToAdd.course_code = newcourse.course_code;
        level.courses.push(courseToAdd);
        
        
    };
    
    $scope.createNewCourse = function(level){
        var newCourse = {};
        newCourse.course_id = 0;
        newCourse.program_id = $scope.currentProgram.program_id;
        newCourse.level_id = level.level_id;
        newCourse.semester = "1";
        newCourse.program_name = $scope.currentProgram.program_name;
        newCourse.school_id = $scope.currentProgram.school_id;
        
        level.courses.push(newCourse);
        
        $scope.setCurrentProgramCourseAndLevel(newCourse, level);
    };
})
})();
    
</script>
