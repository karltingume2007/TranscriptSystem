<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('enrolmentController', function($scope, $http, $window)
{
    $scope.noRecordsFoundDisplayMessage = "No records found";
    $scope.showNoRecordsFoundDisplayMessage = false; 
     
     $scope.allPrograms = [];     
     $scope.enrolments = [];
     
     $scope.bind_default_data = function()
     {
         var url = '<?php echo site_url(); ?>' + '/schoolprograms/get_all_programs/';
         $http.get(url).success(function(result)
         {
            $scope.allPrograms = result; 
         });
         
//         var url = '<?php echo site_url(); ?>' + '/enrollments/get_all_enrolments/';
//         $http.get(url).success(function(result)
//         {
//            $scope.enrolments = result; 
//         });
     };
     
     $scope.create_new_enrolment = function(){
         var enrolment = {};
         $scope.current_enrolment = enrolment;
     };
     
     $scope.create_new_student = function(){
         var student = {};
         $scope.current_student = student;
    };
    
    $scope.save_student = function(student){
        var jsonObject = angular.toJson(student);
        var url = '<?php echo site_url(); ?>' + '/students/save_student/';
        
        $http({
                method: 'POST',
                url: url,
                data: jsonObject
                }).success(function (savedStudent, status, headers, config) {
                    student = savedStudent;
                });
    };
    
    $scope.save_enrolment = function(enrolment){
        var jsonObject = angular.toJson(enrolment);
        var url = '<?php echo site_url(); ?>' + '/enrolments/save_enrolment/';
        
        $http({
                method: 'POST',
                url: url,
                data: jsonObject
                }).success(function (savedEnrolment, status, headers, config) {
                    enrolment = savedEnrolment;
                });
    };
     
     $scope.search_enrolment = function(){
         $criteria = array();
         $criteria['academicYear'] = $scope.academicYear;
         $criteria['programId'] = $scope.program;
         $criteria['level'] = $scope.level;
         $criteria['studentName'] = $scope.studentName;
         
         var criteria_jsonObject = angular.toJson($criteria);
         
         var url = '<?php echo site_url(); ?>' + '/enrolments/search_enrolments/';
         url += criteria_jsonObject;
         
         $http.get(url).success(function(result)
         {
             $scope.enrolments = result;
             if (result.count < 1)
             {
                 $scope.showNoRecordsFoundDisplayMessage = true;
                 $scope.noRecordsFoundDisplayMessage = "No records found";
             }
   //          $window.open(result.redirectURL, "_self");
         });
     };
     
     $scope.bind_default_data();
   //  $scope.search_enrolment();
     
});
})();
    
</script>


