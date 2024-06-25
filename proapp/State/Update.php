<?php
include("conn.php");
$id=$_GET["id"];
$Name=$_GET["Name"];
$Cname=$_GET["Country_name"];
$sql="update state set Name='".$Name."',Country_name='".$Cname."' where State_id='".$id."'";
mysqli_query($conn,$sql);
header("location:state.php");
mysqli_close($conn);
?>