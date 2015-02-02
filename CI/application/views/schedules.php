<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Schedule</title>
        <link href="<?php echo base_url(); ?>css/design.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>data_table/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>data_table/css/DT_bootstrap.css">
        <link href="<?php echo base_url(); ?>data_table/css/bootstrap_1.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstraper.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/queryJ.js"></script>
<body style="background:url('<?php echo base_url(); ?>images/back.jpg')no-repeat center center fixed; background-size:cover;">

 <div id="container2">
    
    <div id="boxSchedule"></div>
      
    <div class="schedContent">
       <a href="<?php echo base_url(); ?>index.php/siteController/reservation" style="text-decoration: none;"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
    <div class="row-fluid">
        <div class="span12">
            <div class="container" style="width:860px; margin-left:-40px;">
        <table  cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                         
            <thead>
                <tr>
                    <th>Vessel Name</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Departure Day</th>
                    <th>Departure Pier</th>
                    <th>Arrival Date</th>
                    <th>Arrival Time</th>
                    <th>Arrival Day</th>
                    <th>Arrival Pier</th>
                </tr>
            </thead>
            
            <tbody> 
            <?php foreach($sched as $schedule) {?>
              <tr>   
                 <td><?php echo $schedule->vessel; ?></td>
                 <td><?php echo $schedule->depDate; ?></td>
                 <td><?php echo $schedule->depTime; ?></td>
                 <td><?php echo $schedule->depDay; ?></td>
                 <td><?php echo $schedule->depPier; ?></td>
                 <td><?php echo $schedule->arrDate; ?></td>
                 <td><?php echo $schedule->arrTime; ?></td>
                 <td><?php echo $schedule->arrDay; ?></td>
                 <td><?php echo $schedule->arrPier; ?></td>
               </tr>
            <?php  } ?>
           
            </tbody>
                            
          </table>


          
        </div>
        </div>
        </div>
    </div>
    </div>


</body>
</html>


