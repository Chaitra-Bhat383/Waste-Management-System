<?php include 'head.php'; 
        
include 'aaside.php'; ?>

    
        <div class="page-wrapper">
      
       
             <div>
                        <div class="card" style="background-color:darkblue;width: 2000px;height:100px">
                            <div class="card-body">
                                
                                <div class="btn-list">
                                   
                          
                              
                                                        
                            
                                                        
                              
                            
                                       
                                </div>
                            </div>
                        </div>
                    </div>                   



       
       
            <div class="container-fluid">
               
                <div class="row">

   <?php 
							$sq=mysqli_query($con,"SELECT * FROM clients");
							?>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                            </div>
                           <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                            <th>&nbsp;</th>
                                            <th>Name</th>
                                            <th>Pay Type</th>
                                            <th>Category</th>
                                            <th>Waste Type</th> 
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                        </tr>
                                       
                                </thead>


                                <?php $k=1;
									while($hk=mysqli_fetch_array($sq))
									{ ?>
                                <tbody>
                                    <tr>
                                  
                                        <tr>
                                             <td><?php echo $k;?></td>
                                            <td><?php echo $hk['names'];?></td>
                                            <td><?php echo $hk['pay_type'];?></td>
                                            <td><?php echo $hk['client_type'];?></td>
                                            <td><?php echo $hk['gabage_type'];?></td>
                                            <td><?php echo $hk['location'];?></td>
                                            <td><?php echo $hk['contact'];?></td>
                                            <td><?php echo $hk['status'];?></td>
                                           
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>