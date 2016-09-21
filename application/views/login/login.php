<br/><br/>  <br/><br/>  
<div  ng-controller="loginViewController as controller" >
    
    <?php echo echo_wait_form("Checking...");?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <div class="alert alert-danger" ng-show="showMessageLabel">
                    {{loginMessage}}
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="<?php echo base_url();?>resources/images/fomic_logo.jpg" width="150" height="100" class="col-xs-offset-4">
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group col-xs-12">
                                    <label class="control-label col-xs-3">Username: </label>
                                    <div class="col-xs-9">
                                         <input type="text" class="form-control" ng-model="username" placeholder="Enter admin username" />
                                    </div>
                            </div> 
                            <div class="form-group">
                                <label class="control-label col-xs-3">Password:</label> 
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" ng-model="password" placeholder="Enter admin password" />
                                </div>
                            </div>   
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning col-xs-offset-3 col-xs-3" value="LOGIN" ng-click="authenticate()"/> 
                                <input type="reset" value="RESET" class="btn btn-danger col-xs-offset-1 col-xs-3">
                            </div>   
        
        
                                
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>
    </div>
</div>