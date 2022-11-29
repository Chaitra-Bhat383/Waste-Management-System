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
                           $u=$_SESSION['username'];
                           $sq=mysqli_query($con,"SELECT * FROM payment ");
                            
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
                                            <th>No</th>
                                         <th>Collector</th>
                                           <th>Client</th>
                                           <th>Waste Tpye</th><th>Pay Type</th>
                                           <th>Amount</th> 
                                           <th>Balance</th> 
                                           <th>Date</th> 
                                     <th>Reason</th>
<th>Reciept No</th>      
                                         
                                       </tr>
                                      
                               </thead>


                               <?php $k=1;
                                   while($hk=mysqli_fetch_array($sq))
                                   { ?>
                               <tbody>
                                   <tr>
                                        <td><?php echo $k;?></td>
                                           <td><?php echo $hk['collector'];?></td>
                                           <td><?php echo $hk['clientname'];?></td>
                                           <td><?php echo $hk['typeofwaste'];?></td>
                                           <td><?php echo $hk['paytype'];?></td>
                                           <td><?php echo $hk['amountpaid'];?></td>
                                           <td><?php echo $hk['balance'];?></td>
                                           <td><?php echo $hk['date'];?></td>
                                            <td><?php echo $hk['reason'];?></td>
                                           <td><?php echo $hk['recieptno'];?></td>
                                           
                                          
                                          
                                          
                                           </tr> 
                                       <?php  $k++; } ?>
                               </tbody>
                           </table>

                       </div>
                   </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>