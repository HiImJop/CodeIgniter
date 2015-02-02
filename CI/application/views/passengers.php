<?php include('headfoot/headAdmin.php'); ?>        
<form method="Post" action="<?php echo base_url(); ?>index.php/profile/getEdit">
    <div class="row-fluid">
        <div class="span12">
          <div class="container" style="margin-top:70px;">
            <table class="table table-hover table-bordered" id="example">
                         
            <thead>
                <tr>
                    <th>Full name</th>
                    <th>Travel Type</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Status</th>
                </tr>
            </thead>
            
            <tbody> 
            <?php foreach($datas as $n) {?>
              <tr>
                 <input type="hidden" value='<?php echo "$n->ticketNo"; ?>' />
                 <td><?php echo $n->name; ?></td>
                 <td><?php echo $n->travType; ?></td>
                 <td><?php echo $n->origin; ?></td>
                 <td><?php echo $n->destination; ?></td>
                 <td><?php echo $n->status; ?> <a style="text-decoration:none;" class="glyphicon glyphicon-pencil pull-right" href="<?php echo base_url(); ?>index.php/profile/getEdit?ticket=<?php echo $n->ticketNo; ?>"></a></td>
               </tr>
            <?php  } ?>
           
            </tbody>
                            
          </table>

        </div>
        </div>
        </div>
   </form>
 
   
    <script src="<?php echo base_url(); ?>data_table/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>data_table/js/bootstraper.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="<?php echo base_url(); ?>data_table/js/queryJ.js"></script>

  
    
</body>
</html>