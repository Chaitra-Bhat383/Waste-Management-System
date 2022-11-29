<?php 
  include 'connect.php';
    

$id=$_GET['id'];
$delete=mysqli_query($con,"delete from gabbage_type where id='$id'");
if ($delete) {
	header("location:admin_view_waste_types.php");
   echo "deleted";
}
else{
 echo "not deleted".mysqli_error();

}

 ?>