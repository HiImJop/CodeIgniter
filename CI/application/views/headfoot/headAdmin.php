<html>
    <head>
        <title><?php if($this->uri->segment(2) == "admin"){echo 'Administrator';}elseif($this->uri->segment(2) == "retrieve") echo 'Passenger'; ?></title>
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>data_table/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>data_table/css/DT_bootstrap.css">
    </head>
    <body>
      
        
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             <div class="container">
                 <div class="navbar-header navbar-right">
                    <div class="dropdown">
                        <a style="margin-right:30px; margin-top:3px; margin-bottom: 2px;" class="dropdown-toggle btn btn-info" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user')?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>index.php/siteController/admin"><span class="glyphicon glyphicon-dashboard"></span> Hi! Admin</a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/profile/retrieve"><span class="glyphicon glyphicon-user"></span> Queue Passengers</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo base_url(); ?>index.php/siteController/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                      </ul>
                  </div>
                 </div>
             </div>
            </div>

