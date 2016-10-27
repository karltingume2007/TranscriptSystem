<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('enrolmentController', function($scope, $http, $window)
{
    $scope.siteURL = '<?php echo site_url() ?>' + '/';
    $scope.selectedYear = '<?php echo get_current_academic_year(); ?>';
    $scope.selectedProgramId = null;
    
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
    
});
})();
    
</script>


