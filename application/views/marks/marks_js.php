<script type="text/javascript">
(function(){
angular.module('transcript', [])
.controller('marksController', function($scope, $http, $window)
{
    $scope.noRecordsFoundDisplayMessage = "No records found";
    $scope.showNoRecordsFoundDisplayMessage = false; 
     
     $scope.allCourses = [];     
     $scope.studentCourses = [];
     
     $scope.bind_default_data = function()
     {
         var url = '<?php echo site_url(); ?>' + '/courses/get_all_courses/';
         $http.get(url).success(function(result)
         {
            $scope.allCourses = result; 
         });
         
         var url = '<?php echo site_url(); ?>' + '/studentCourses/get_all_student_courses/';
         $http.get(url).success(function(result)
         {
            $scope.studentCourses = result; 
            $scope.showNoRecordsFoundDisplayMessage = true;
         });
     };
    
    $scope.save_current_student_course = function(current_student_course){
        var jsonObject = angular.toJson(current_student_course);
        var url = '<?php echo site_url(); ?>' + '/studentCourses/save_studentCourse/';
        
        $http({
                method: 'POST',
                url: url,
                data: jsonObject
                }).success(function (savedStudentCourse, status, headers, config) {
                    current_student_course = savedStudentCourse;
                });
    };
     
     $scope.search_studentCourses = function(){              
         
         var url = '<?php echo site_url(); ?>' + '/studentCourses/search_student_courses/';
         
         var criteria = [];
         criteria.push(
                 {
                     'academicYear': $scope.criteria_academicYear,
                     'courseId': $scope.criteria_courseId,
                     'level': $scope.criteria_level,
                     'studentName': $scope.criteria_studentName
                 });
         
         var criteria_jsonObject = angular.toJson(criteria);

        $http({
                method: 'POST',
                url: url,
                data: criteria_jsonObject
                }).success(function (results, status, headers, config) {
                    $scope.studentCourses = results;
                });
     };
     
     $scope.set_current_studentCourse = function(studentCourse)
     {
         $scope.current_student_course = studentCourse;
     }
     
     $scope.bind_default_data();
     
});
})();
    
</script>


