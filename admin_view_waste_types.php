<?php include 'head.php'; 
        
include 'aaside.php'; ?>

    
        <div class="page-wrapper">
      
       
             <div >
                        <div class="card" style="background-color:darkblue;width: 2000px;height:100px">
                            <div class="card-body">
                                
                                <div class="btn-list">
                                 
                                  <a href="admin_waste_types.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">Add Category</button></a>
                          
                              <a href="admin_view_waste_types.php?user=<?php echo $_SESSION['username']; ?>"><button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">View Category</button></a>
                                                        
                            
                                                        
                              
                            
                                       
                                </div>
                            </div>
                        </div>
                    </div>                   



       
       
            <div class="container-fluid">
               
                <div class="row">

    <?php 
							$sq=mysqli_query($con,"SELECT * FROM gabbage_type");
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
                                     <th>Category Name</th>
                                            <th>Amount Per Month</th>
                                            <th>Amount Per Collection</th>
                                      <th>Delete Category </th>  
                                          
                                        </tr>
                                       
                                </thead>


                                <?php $k=1;
									while($hk=mysqli_fetch_array($sq))
									{ ?>
                                <tbody>
                                    <tr>
                                  
                                        <tr>
                                            <td><?php echo $k;?></td>
                                             <td><?php echo ucfirst($hk['name']);?></td>
                                            <td><?php echo ucfirst($hk['chargespm']);?></td>
                                              <td><?php echo ucfirst($hk['chargespd']);?></td>
                                          

                                          
                                            <td><a href="admin_delete_waste_types.php?id=<?php echo $hk['id']; ?>"> Delete </a></td>
                                           
                                           
                                            </tr> 
                                        <?php  $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>