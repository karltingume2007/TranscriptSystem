<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('enrolmentController', function($scope, $http, $filter)
{
    $scope.siteURL = '<?php echo site_url() ?>' + '/';
    $scope.images_location = '<?php echo base_url('resources/images') ?>' + '/';
    $scope.filter = {};
    $scope.current_academic_year = '<?php echo get_current_academic_year(); ?>';
    $scope.filter.academic_year = $scope.current_academic_year;
    $scope.new_enrolment = {};
    $scope.newly_saved = {};
    $scope.current_enrolment = {};
    
    $scope.allAcademicYears = [];
    $http.get($scope.siteURL + 'global_json_repo/get_all_academic_years').success(function(result)
    {
        $scope.allAcademicYears = result;
    }) 
    
    $scope.allPrograms = [];
    $http.get($scope.siteURL + 'global_json_repo/get_all_Programs').success(function(result)
    {
        $scope.allPrograms = result;
    })
    
    $scope.allLevels = [];
    $http.get($scope.siteURL + 'global_json_repo/get_all_levels').success(function(result)
    {
        $scope.allLevels = result;
    })
    
    $scope.clearFilter = function()
    {
        $scope.filter = {academic_year:$scope.filter.academic_year};
    };
    
    $scope.get_enrolments = function()
    {               
        var url = $scope.siteURL + 'enrolments/get_enrolments';
        var filterObject = angular.toJson($scope.filter);
        
        $http({
            method:'POST', 
            url:url, 
            data:filterObject
        }).success(function(result)
        {
            $scope.all_enrolments = result;
        }).error(function(data, status, headers, config)
        {
            
        });
    };
    $scope.get_enrolments();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $scope.create_new_student = function()
    {
        $scope.clear_student();
    };
    
    $scope.clear_student = function()
    {
        $scope.current_student = {};
    };
    
    $scope.save_student = function(student)
    {
        var student_object = angular.toJson(student);
        var url = $scope.siteURL + 'students/save_student/';
        
        $http({method:'POST', url:url, data:JSON.parse(student_object)})
        .success(function(result)
        {
            $scope.current_student = result;
        })
        .error(function(data, status, headers, config)
        {
        });
    };
   
   
   
   
   
   
   
   /*
    * This secgtion contains code related tot eh createion of enrolments
    */
    
    $scope.create_new_enrolment = function()
    {
        $scope.new_enrolment = {};
        $scope.new_enrolment.academic_year = $scope.current_academic_year;
        if($scope.current_student.student_id > 0)
        {
            $scope.new_enrolment.student_id = $scope.current_student.student_id;
        }
    }
    
    $scope.search_student = function(keyword)
    {
        var url = $scope.siteURL + 'students/search_student/';
        
        $http({method:'POST', url:url, data:keyword})
        .success(function(result)
        {
            $scope.current_student = null;
            $scope.new_enrolment.student_id = null;
            $scope.students = result;
        })
        .error(function(data, status, headers, config)
        {
        });
    };
    
    
    $scope.no_student_selected = function()
    {
        return $scope.current_student === null;
    };
    
    $scope.set_current_student = function(student)
    {
        $scope.current_student = student;
        $scope.new_enrolment.student_id = student.student_id;
    };
    
    $scope.get_student_avatar = function(student)
    {
        var ret_val = $scope.images_location;
        var gender = $filter('uppercase')(student.gender);
        if(gender === 'MALE')
        {
            ret_val += 'male_avatar.jpg';
        }
        else
        {
            ret_val += 'female_avatar.jpg';
        }
        return ret_val;
    };
    
    $scope.save_enrolment = function(enrolment)
    {
        var url = $scope.siteURL + 'enrolments/save_new_enrolment/';
        var enrolment_object = angular.toJson(enrolment);
        
        $http({method:'POST', url:url, data:enrolment_object})
        .success(function(result)
        {
            $scope.newly_saved = result;
            $scope.current_student = null;
            $scope.filter.academic_year = result.academic_year;
            $scope.filter.level_id = result.level_id;
            $scope.filter.program_id = result.program_id;
            
            $scope.get_enrolments();
        })
        .error(function(data, status, headers, config)
        {
            alert('error');
            console.log(data);
        });
    };
    
    
    
    
    
    
    
    
    
    $scope.load_enrolment = function(enrolment)
    {
        $scope.current_enrolment = enrolment;
        
        var url = $scope.siteURL + 'enrolments/get_enrolment/' + enrolment.enrollment_id;

        $http.get(url).success(function(result)
        {
            $scope.current_enrolment = result;
        })
        .error(function(data, status, headers, config)
        {
//            alert('error');
//            console.log(data);
        });
    };
   
});
})();
    
</script>


