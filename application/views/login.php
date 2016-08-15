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
                <div class="col-md-12">
                    <form id="login_form">
                        <table>
                            <tr>
                                <td><label>User Name: </label></td>
                                <td><input type="text" name="User Name"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><label>Password: </label></td>
                                <td><input type="password" name="Password"></td>
                            </tr>
                        </table>                     

                        <input type="button" name="Submit" value="Submit">
                        <input type="button" name="Cancel" value="Cancel">
                    </form>  
                </div>
            </div>
        </div>       
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"</script>
    </body>
</html>
