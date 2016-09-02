<script type="text/javascript">
(function(){
 angular.module('transcript', [])
         .controller('enrollmentController', function($scope, $http, $window)){
             var enrollments = this;
   //  $scope.academicYear = " ";
   //  $scope.departmentOrProgram = " ";
   //  $scope.level = " ";
   //  $scope.studentName = " ";
     
     $scope.search_enrollment = function()
     {
         var criteria = array
         (
             academicYear => $scope.academicYear,
             departmentOrProgram => $scope.departmentOrProgram,
             level => $scope.level,
             studentName => $scope.studentName
         );
         var url = '<?php echo site_url(); ?>' + '/enrollment/search_enrollments/';
         url += criteria;
         
         $http.get(url).success(function(result)
         {
             enrollments.enrollments = result;
             if (result.length < 1)
             {
                 $scope.showNoRecordsFoundDisplayMessage = true;
                 $scope.noRecordsFoundDisplayMessage = "No records found";
             }
             //$window.open(result.redirectURL, "_self");
         });
     };
 }
 
});
</script>

