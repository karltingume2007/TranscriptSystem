<script type="text/javascript">
(function(){
ang ular.module('transcript', [])
.controller('loginViewController', function($scope, $http, $window)
{
    $scope.siteURL = '<?php echo site_url();?>';
    $scope.showMessageLabel = false;
    $scope.showWaitForm = false;
    
    $scope.authenticate = function()
    {
        $scope.showMessageLabel = false;
        $scope.showWaitForm = true;
        
        var url = $scope.siteURL + '/authentication/check_credentials/';
        url += $scope.username + '/';
        url += $scope.password;
        
        $http.get(url).success(function(result)
        {
            $scope.showWaitForm = false;
            if(result.isValidLogin)
            {
                $window.open(result.redirectURL, "_self");
            }
            else
            {
                $scope.showWaitForm = false;
                $scope.loginMessage = "Username or password incorrect";
                $scope.showMessageLabel = true;
            }
        })
        .error(function (data, status, headers, config) 
        {
            console.log("Error: status = " + status + '  data = ' + data);
        });
    };
})
})();
    
</script>