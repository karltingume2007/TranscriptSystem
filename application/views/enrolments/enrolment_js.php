<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('enrolmentController', function($scope, $http, $window)
{
    $scope.siteURL = '<?php echo site_url() ?>' + '/';
    $scope.filter = {};
    $scope.filter.academic_year = '<?php echo get_current_academic_year(); ?>';
    
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
    
    $scope.getEnrollments = function()
    {               
        var url = $scope.siteURL + 'enrolments/get_enrolments';
        var filterObject = angular.toJson($scope.filter);
        
        $http({
            method:'POST', 
            url:url, 
            data:filterObject
        }).success(function(result)
        {
            $scope.all_enrollments = result;
        }).error(function(data, status, headers, config)
        {
            
        });
    };
    $scope.getEnrollments();
});
})();
    
</script>


