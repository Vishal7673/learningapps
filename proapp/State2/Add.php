<?php
include("conn.php");
$State_name=$_GET["State_name"];
$Country_name=$_GET["Country_name"];
$sql="insert into state2 (State_name,Country_id) values ('".$State_name."','".$Country_name."')";
mysqli_query($conn,$sql);
header("location:state.php");
mysqli_close($conn);

?>
