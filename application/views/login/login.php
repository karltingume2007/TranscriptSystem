<br/><br/>  <br/><br/>  
<div  ng-controller="loginViewController as controller" >
    <div class="alert alert-danger" ng-show="showMessageLabel">
        {{loginMessage}}
    </div>
    
    <?php echo echo_wait_form("Checking...");?>
    
    <form>
        <label>
            Username: 
            <input type="text" ng-model="username"/>
        </label>
        <label>
            Password: 
            <input type="password" ng-model="password" />
        </label>
        
        <input type="submit" value="Submit" ng-click="authenticate()"/>
    </form>
</div>