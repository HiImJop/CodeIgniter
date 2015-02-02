<html>
    <head>
        <title>Transaction</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css"/>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header"><a href="<?php echo base_url(); ?>index.php/profile/retrieve"><span class="glyphicon glyphicon-arrow-left" style="margin-top:5px; margin-left:20px;"></span> Back</a></div>
        </div>
        <div class="container">
            <div class="leftside">
            <img src="<?php echo base_url(); ?>images/user-icon.png"/>
            <div class="guidebox">
               <?php foreach($ticket as $t) {?>
                 <span class="glyphicon glyphicon-user" style="padding-top:20px; padding-left:25px; width:10px; height:10px; display: inline;"> <b><?php echo $t->name; ?></b></span>
                 <span class="glyphicon glyphicon-pencil" style="padding-left:25px; padding-top:18px;"> <b><?php echo $t->contact; ?></b></span>
                 <span class="glyphicon glyphicon-pushpin" style="padding-left:25px; padding-top:20px;"> <b><?php echo $t->origin; ?></b></span>
               
              </div>
            </div>
            <div class="centerside">
                <form method="post" action="updateTrans">
                   <table >
                       <tr>
                           <td>
                                <div class="input-group input-group-sm" style="padding-top:30px; width:150px;">
                                <span class="input-group-addon"><b>Ticket No.: </b></span>
                                <input type="text" value="<?php echo $t->ticketNo;?>" class="form-control" readonly name="ticket"/>
                                </div>
                           </td>
                       </tr>
                    <tr>
                        <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:270px;">
                            <span class="input-group-addon"><b>Address: </b></span>
                            <input type="text" value="<?php echo $t->address;?>" class="form-control" readonly/>
                            </div>
                        </td>  
                        <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:200px; padding-left:20px;">
                            <span class="input-group-addon"><b>No. of Adults: </b></span>
                            <input type="text" value="<?php echo $t->noPaxA;?>" class="form-control" readonly/>
                            </div>
                        </td>  
                         <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:230px; padding-left:20px;">
                            <span class="input-group-addon"><b>No. of Child: </b></span>
                            <input type="text" value="<?php echo $t->noPaxC;?>" class="form-control" readonly/>
                            </div>
                        </td>  
                    </tr>   
                    <tr>
                         <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:270px;">
                            <span class="input-group-addon"><b>Travel Type: </b></span>
                            <input type="text" value="<?php if($t->travType == 'O' || $t->travType == '0' ){ echo $t->travType . 'ne Way';} else{ echo $t->travType .'ound Trip';} ?>" class="form-control" readonly/>
                            </div>
                        </td>
                        
                         <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:200px; padding-left:20px;">
                            <span class="input-group-addon"><b>Destination: </b></span>
                            <input type="text" value="<?php echo $t->destination;?>" class="form-control" readonly/>
                            </div>
                        </td>
                        
                        <td>
                            <div class="input-group input-group-sm" style="padding-top:30px; width:230px; padding-left:20px;">
                            <span class="input-group-addon"><b>Departure Date: </b></span>
                            <input type="text" value="<?php echo $t->depDate;?>" class="form-control" readonly/>
                            </div>
                        </td>
                            
                    </tr>
                    <tr>
                        <td>
                           <div class="input-group input-group-sm" style="padding-top:30px; width:270px; ">
                            <span class="input-group-addon"><b>Email: </b></span>
                            <input type="text" value="<?php echo $t->email;?>" class="form-control" readonly/>
                            </div> 
                        </td>
                        
                        <td>
                           <div class="input-group input-group-sm" style="padding-top:30px; width:200px; padding-left:20px; ">
                            <span class="input-group-addon"><b>Status: </b></span>
                            <input type="text" value="<?php echo $t->status; ?>" class="form-control" name="stat" <?php if(strtolower($t->status) == 'close'){echo 'readonly';}?> />
                            </div> 
                        </td>
                        
                        <td>
                           <div class="input-group input-group-sm" style="padding-top:30px; width:270px; padding-left:20px;">
                            <span class="input-group-addon"><b>Accommodation Type: </b></span>
                            <input type="text" value="<?php echo $t->accoType;?>" class="form-control" readonly/>
                            </div> 
                        </td>
                    </tr>
                    
                   </table>
                    <button class="btn btn-info" style="margin-top:70px;"  <?php if(strtolower($t->status) == 'close'){echo 'disabled';}?>><span class="glyphicon glyphicon-edit"></span> Update Status</button>
                </form>
                <?php }?>
            </div>
        </div> 
        
     <script type="javascript">
         alert(<?php echo $message; ?>);
     </script>
    </body>
</html>