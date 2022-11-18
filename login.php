<?php 
session_start();
include 'connect.php';
$us=$_POST['username'];
$ps=$_POST['password'];
$sql=mysqli_query($con,"SELECT * FROM admin WHERE username='$us' AND password='$ps' AND acstatus='active'");
$rows=mysqli_num_rows($sql);
$det=mysqli_fetch_array($sql);
if($rows>0)
{    
	
	$_SESSION['username']=$us; 
	$_SESSION['logtime']=date('Y-m-d H:i:s');
	$date=$_POST['dat'];
	 if($det['ucat']=='admin')
	 {
		 header("location:garbage/admin_user_add.php");
	 } 
	 elseif($det['ucat']=='colletor' || $det['ucat']=='collector')
	 {
		 header("location:garbage/collector_client.php");
	 }
	 else 
	{

	header("location:home.php?msg=Please Enter Correct Login Details");
	}
}
else
{ 
header("location:signin.php?msg=Please Enter Correct Login Details");
}
echo $us; 
?>