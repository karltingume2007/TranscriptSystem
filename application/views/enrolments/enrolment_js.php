<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('enrolmentController', function($scope, $http, $window)
{
    $scope.siteURL = '<?php echo site_url() ?>' + '/';
    $scope.images_location = '<?php echo base_url('resources/images') ?>' + '/';
    $scope.filter = {};
    $scope.current_academic_year = '<?php echo get_current_academic_year(); ?>';
    $scope.filter.academic_year = $scope.current_academic_year;
    $scope.new_enrolment = {};
    
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
//        $scope.current_student = 
//        {
//            "student_id":0,
//            "student_name":null,
//            "email":null,
//            "phone_number":null,
//            "address":null,
//            "matricule":null,
//            "gender":'male',
//            "date_of_birth":'2016-01-01'
//        };

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
   
    
    $scope.create_new_enrolment = function()
    {
        $scope.new_enrolment = {};
        $scope.new_enrolment.academic_year = $scope.current_academic_year;
    }
    
    $scope.search_student = function(keyword)
    {
        var url = $scope.siteURL + 'students/search_student/';
        
        $scope.current_student = null;
        $scope.new_enrolment.student_id = null;
        
        $http({method:'POST', url:url, data:keyword})
        .success(function(result)
        {
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
        if(student.gender === 'Male')
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
        alert('saving');
        var url = $scope.siteURL + 'enrolments/save_enrolment/';
        var enrolment_object = angular.toJson(enrolment)
        
        $http({method:'POST', url:url, data:enrolment_object})
        .success(function(result)
        {
            console.log(result);
            $scope.get_enrolments();
        })
        .error(function(data, status, headers, config)
        {
            alert('error');
            console.log(data);
        });
    };
});
})();
    
</script>


