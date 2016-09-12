<script type="text/javascript">
(function(){
 angular.module('transcript', [])
 .controller('enrollmentController', function($scope, $http, $window)){
             var enrollments = this;
     enrollments.enrollments = [];
     
     var programs = this;
     programs.programs = [];
     
     
     $scope.noRecordsFoundDisplayMessage = "No records found";
     $scope.showNoRecordsFoundDisplayMessage = false; 
     
     $scope.bind_default_data = function()
     {
         var url = '<?php echo site_url(); ?>' + '/schoolprograms/get_all_programs/';
         $http.get(url).success(function(result)
         {
            programs.programs = result; 
         });
     }
     
     $scope.search_enrollment = function()
     {
         var criteria = array
         (
             academicYear => $scope.academicYear,
             programId => $scope.program,
             level => $scope.level,
             studentName => $scope.studentName
         );
         var url = '<?php echo site_url(); ?>' + '/enrollment/search_enrollments/';
         url += criteria;
         
         $http.get(url).success(function(result)
         {
             enrollments.enrollments = result;
             //if (result.length < 1)
             //{
             //    $scope.showNoRecordsFoundDisplayMessage = true;
             //    $scope.noRecordsFoundDisplayMessage = "No records found";
             //}
             //$window.open(result.redirectURL, "_self");
         });
     };
 }
 
});
</script>

