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
    }
    
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
    }
    
})
})();
    
</script>
