<!DOCTYPE html>
<html>
    <head>
        <title>New Enrollment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Link bootstrap to the page -->
        <!-- Bootstrap Core CSS -->
        <link href= "<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="modal-open">
                        <div class="modal-content">
                            <form>
                                <table class="col-md-8">
                                    <tr>
                                        <td><label>Student Name:</label></td><td><input type="text" name="name" width="30%"></td>
                                    </tr> 
                                    <tr>
                                        <td><label>Date of Birth:</label></td><td><input type="text" name="dob" width="30%"></td>                                
                                    </tr>
                                    <tr>
                                        <td><label>Gender:</label></td><td><input type="text" name="gender" width="30%"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Level:</td></label>
                                        <td>
                                            <select name="level">
                                            <option value="1">Level 1</option>
                                            <option value="2">Level 2</option>
                                            <option value="3">Level 3</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Program:</label></td>
                                        <td>                                    
                                            <select name="program">
                                                <option value="se">Software Engineering</option>
                                                <option value="ict">Information Communication Technology (ICT)</option>
                                                <option value="ee">Electrical Engineering</option>
                                                <option value="networking">Network</option>
                                                <option value="telecom">Telecom</option> 
                                                <option value="telecom">Accounting</option> 
                                                <option value="telecom">Management</option> 
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Academic Year:</label></td>
                                        <td>
                                            <select name="academic_year">
                                            <option value="2010/2011">2010/2011</option>
                                            <option value="2011/2012">2011/2012</option>
                                            <option value="2012/2013">2012/2013</option>
                                            <option value="2013/2014">2013/2014</option>
                                            <option value="2014/2015">2014/2015</option>
                                            <option value="2015/2016">2015/2016</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="button" name="save" value="Save"></td>
                                        <td><input type="button" name="cancel" value="Cancel"</td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        
                    </div>
                                      
                    
                </div>
            </div>
        </div>
    </body>
    
</html>

