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
		 header("location:apatient/users.php");
	 } 
	 elseif($det['ucat']=='colletor' || $det['ucat']=='collector')
	 {
		 header("location:apatient/transport1.php");
	 }
	 elseif($det['ucat']=='epharmacy')
	 {
		 header("location:epharmacy.php");
	 }
	 elseif($det['ucat']=='equipment')
	 {
		 header("location:store.php");
	 }
	  elseif($det['ucat']=='Emergency')
	 {
		 header("location:emergencypatients.php");
	 }
	elseif($det['ucat']=='callcenter')
	 {
		 header("location:emergencycases.php");
	 }
	elseif($det['ucat']=='lab')
	 {
		 header("location:maketest.php");
	 }
	elseif($det['ucat']=='radiology')
	 {
		 header("location:makescan.php");
	 }
	elseif($det['ucat']=='pharmacy')
	 {
		 header("location:issuedrug.php");
	 }
	elseif($det['ucat']=='patient')
	 {
		 header("location:apatient/index.php?user=$us");
	 }
	elseif($det['ucat']=='delivery')
	 {
		 header("location:mydeliveries.php");
	 }
	elseif($det['ucat']=='accounts')
	 {
		 header("location:sales.php");
	 }
	 elseif($det['ucat']=='Ambulance')
	 {
		 header("location:ambuordera.php");
	 } 
	 /*elseif($det['ucat']=='Ambulance')
	 {
		 header("location:ambuorder.php");
	 }*/
	  elseif($det['ucat']=='medical assistant')
	 {
		 header("location:medicalhistory1.php");
	 }
	 elseif($det['ucat']=='recieve')
	 {
		 header("location:humanrespat.php");
	 }
	  elseif($det['ucat']=='HumanResource')
	 {
		 header("location:employees2.php");
	 }
	 elseif($det['ucat']=='AmbulanceRequest')
	 {
		 header("location:amb1.php");
	 }
      elseif($det['ucat']=='Admission')
	 {
		 header("location:employees2.php");
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