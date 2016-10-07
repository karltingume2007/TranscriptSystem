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
         
         var url = '<?php echo site_url(); ?>' + '/enrolments/get_all_enrolments/';
         $http.get(url).success(function(result)
         {
            $scope.enrolments = result; 
            $scope.showNoRecordsFoundDisplayMessage = true;
         });
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
         
         var url = '<?php echo site_url(); ?>' + '/enrolments/search_enrolments/';
         
         var criteria = [];
         criteria.push(
                 {
                     'academicYear': $scope.criteria_academicYear,
                     'programId': $scope.criteria_programId,
                     'level': $scope.criteria_level,
                     'studentName': $scope.criteria_studentName
                 });
         
         var criteria_jsonObject = angular.toJson(criteria);
         
//         $http.post(url, {"criteria" : criteria_jsonObject}).success(function(result)
//         {
//             $scope.enrolments = result;
//         });

        $http({
                method: 'POST',
                url: url,
                data: criteria_jsonObject
                }).success(function (results, status, headers, config) {
                    $scope.enrolments = results;
                });
     };
         
         
    //     alert('This function is called');
         
   //      $criteria = array();
   //      $criteria['academicYear'] = $scope.criteria_academicYear;
   //      $criteria['programId'] = $scope.criteria_programId;
    //     $criteria['level'] = $scope.criteria_level;
   //      $criteria['studentName'] = $scope.criteria_studentName;
   
  //      var criteria = [];
   //     criteria.push({"academicYear": $scope.criteria_academicYear});
   //     criteria.push({"programId": $scope.criteria_programId});
  //      criteria.push({"level": $scope.criteria_level});
 //       criteria.push({"studentName": $scope.criteria_studentName});
         
  ///       var criteria_jsonObject = angular.toJson(criteria);
         
  ///       var url = '<?php echo site_url(); ?>' + '/enrolments/search_enrolments/';
  //       url += criteria_jsonObject;
         
   //      $http.get(url).success(function(result)
   //      {
   //          $scope.enrolments = result;
             
             // todo: Ensure that an error message is displayed if no records are found.
//             if (result.count < 1)
//             {
//                 $scope.showNoRecordsFoundDisplayMessage = true;
//                 $scope.noRecordsFoundDisplayMessage = "No records found";
//             }
   //          $window.open(result.redirectURL, "_self");
  //       });
 //    };
     
     $scope.set_current_enrolment = function(enrolment)
     {
         $scope.current_enrolment = enrolment;
     }
     
     $scope.bind_default_data();
   //  $scope.search_enrolment();
     
});
})();
    
</script>


