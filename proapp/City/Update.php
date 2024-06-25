<?php
include("conn.php");
$State_id=$_GET["id"];
$State_name=$_GET["State_name"];
$Cname=$_GET["Country_name"];
$sql="update state2 set State_name='".$State_name."',Country_id='".$Cname."' where State_id='".$State_id."'";
mysqli_query($conn,$sql);
header("location:state.php");
mysqli_close($conn);
?>