<?php
include("conn.php");
$City_name=$_GET["City_name"];
$State_name=$_GET["State_name"];
$Country_name=$_GET["Country_name"];
$sql="insert into city (City_name,State_id,Country_id) values ('".$City_name."','".$State_name."','".$Country_name."')";
mysqli_query($conn,$sql);
header("location:city.php");
mysqli_close($conn);

?>
