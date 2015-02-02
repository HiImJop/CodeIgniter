<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" charset="utf-8" content="width:device-width, initial-scale=1">
        <title>Ticketing And Reservation</title>
        <link href="<?php echo base_url(); ?>css/design.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
        

        
    </head>
      
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        
        <body style="background:url('<?php echo base_url(); ?>images/back.jpg')no-repeat center center fixed; background-size:cover;">
        
     <img src="<?php echo base_url(); ?>images/logo2.png" width="210px" height="80px" style="margin-top: 5px; margin-left: 230px;">
     <div id="container1">
     <header id="mainHeader">
        <hr/>
        <nav class='menu'>
            <ul>
                <li><a class="<?php if($this->uri->segment(2)=="index" || $this->uri->segment(2)==""){echo "a";}?>" href="<?php echo base_url(); ?>index.php/siteController/index">Home</a></li>
                <li><a class="<?php if($this->uri->segment(2)=="aboutUs"){echo "b";}?>" href="<?php echo base_url(); ?>index.php/siteController/aboutUs">About us</a></li>
                <li><a class="<?php if($this->uri->segment(2)=="contactUs"){echo "c";}?>" href="<?php echo base_url(); ?>index.php/siteController/contactUs">Contact us</a></li>
                <li><a class="<?php if($this->uri->segment(2)=="reservation"){echo "d";}?>" href="<?php echo base_url(); ?>index.php/siteController/reservation">Reservation</a></li>
                <li><a class="<?php if($this->uri->segment(2)=="schedule"){echo "e";}?>" href="<?php echo base_url(); ?>index.php/siteController/schedule">Schedules</a></li>
                <li><a id="in" class="<?php if($this->uri->segment(2)=="signin"){echo "f";}?>" href="#myModal" data-toggle="modal">Sign in</a></li>
                
            </ul>
        </nav>
       <hr/>
       
    </header>
    </div>
     
     <div class="modal fade " role="dialog" id="myModal">
         <div class="modal-dialog modal-sm">
             <div class="modal-content">
                 <div class="modal-header">
                    <h4>Sign In</h4>
                 </div>
                 <div class="modal-body">
                     <?php if(!$this->session->userdata('login')){?> 
                     <form action="<?php echo base_url(); ?>index.php/siteController/signin" method="Post">
                     <div class="input-group input-group-sm">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input type="text"  placeholder="Username" autofocus name="username" class="form-control" required/>
                     </div>
                     <br/>
                     <div class="input-group input-group-sm">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                     <input type="password" placeholder="Password" name="password" class="form-control" required/>
                     </div>
                 </div>
                 <div class="modal-footer">
                     
                     <button class="btn btn-success" type="submit">Sign In</button>
                    <a class="btn btn-danger" data-dismiss="modal">Close</a>
                     </form>
                 </div>
             </div>
         </div>
     </div>
       <?php }else { ?>
        
        <?php redirect(base_url()."index.php/siteController/admin");?>
            
       <?php  } ?>

     
   