<?php include('headfoot/headAdmin.php');?>
        
        
    <div class="container">
        
        <div class="title" style="margin-top: 50px;">
            <h1>Welcome Admin</h1>
        </div>
        
         <div class="row-fluid">
        <div class="span12">
            <div class="container" style="width:860px; margin-left:40px; margin-top:25px;">
                <div>
                    <p style="margin-bottom: -29px; ">Current Vessel Running</p>
                    <a class="btn btn-primary" style="margin-left:735px; margin-bottom: 10px;" href="#edit" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span> Add</a>              
                </div>
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
        
        

    <script typ="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
    <script typ="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    </body>
</html>