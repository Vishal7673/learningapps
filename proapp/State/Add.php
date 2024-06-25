<?php
include("conn.php");
$Name=$_GET["Name"];
$Country_name=$_GET["Country_name"];
$sql="insert into state (Name,Country_name) values ('".$Name."','".$Country_name."')";
mysqli_query($conn,$sql);
header("location:state.php");
mysqli_close($conn);

?>