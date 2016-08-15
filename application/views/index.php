<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Link bootstrap to the page -->
        <!-- Bootstrap Core CSS -->
        <link href= "<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                        <ul class="nav nav-tabs nav-pills nav-stacked tabs-left text-left">                            
                            <li class=" active"><a href="#index" data-toggle="tab">Home</a></li>
                            <li class=""><a href="#students" data-toggle="tab">Students</a></li>
                            <li class=""><a href="#courses" data-toggle="tab">Courses</a></li>
                            <li class=""><a href="#programs" data-toggle="tab">Departments/Programs</a></li>
                            <li class=""><a href="#results" data-toggle="tab">Results</a></li>
                            <li class=""><a href="#personnel" data-toggle="tab">Employees/Lecturers</a></li>                            
                        </ul>                        
                                                 
                </div> 
                
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="index">Home</div>   
                        <div class="tab-pane" id="students">Students</div>  
                        <div class="tab-pane" id="courses">Courses</div>  
                        <div class="tab-pane" id="programs">Programs/Departments</div>  
                        <div class="tab-pane" id="Results">Results</div>  
                        <div class="tab-pane" id="personnel">Personnel</div>                     
                    </div>
                </div>
            </div>
        </div>       
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"</script>
    </body>
</html>
