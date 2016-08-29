<!DOCTYPE html>
<html ng-app="transcript">
    <head>
    <title>Student Manager</title>
    <meta charset="utf-8">
    <!-- Bootstrap Library -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- End on link to bootstrap library -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/font-awesome/css/font-awesome.min.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="transcript generation">
    <meta name="description" content="">
    <meta name="Fomic" content="fomicgroup.cm">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>">
    
	
</head>

<body bgcolor="#ccc">
    <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" id="main-navbar">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                      data-target = ".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    
                    <a class="navbar-brand" href="<?php site_url() ?>">Fomic Polytechnic</a>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">                            
                            <?php
                                echo "<li>" . anchor(site_url('school_settings'), "School Configuration") . "</li>";
                                echo "<li>" . anchor(site_url('enrollment'), "Enrollments") . "</li>";
                                
                            ?>
                           
                            <?php
                            
//                                $language = current_user()->language;
//
//                                if($language == 'en-GB')
//                                {
//                                    $language_link = 'Français';
//                                    $short_link = 'fr-FR';
//                                }
//                                if($language == 'fr-FR')
//                                {
//                                    $language_link = 'English';
//                                    $short_link = 'en-GB';
//                                }

                                if(current_user()->user_id)
                                {
                                    echo '
                                        <li class="">' .anchor(site_url('authentication/logout'), 'Logout') . '</li>
                                            
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                                ' . current_user()->full_name .
                                                '<b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">                                   
                                                <li class="">' .anchor(site_url('authentication/logout'), 'Logout') . '</li>
                                            </ul>
                                        </li> ';
                                }
                                
                            
                            ?>
                            
                                                      
                           
                            
                        </ul>
                    </div>
                </div>
            </nav>
        <br/><br/><br/>
