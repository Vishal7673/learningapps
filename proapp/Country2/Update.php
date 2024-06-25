<?php
include("conn.php");
$Country_id=$_GET["id"];
$Country_name=$_GET["Country_name"];
$Country_code=$_GET["Country_code"];
$sql="update country2 set Country_name='".$Country_name."',Country_code='".$Country_code."' where Country_id='".$Country_id."'";
mysqli_query($conn,$sql);
header("location:country.php");
mysqli_close($conn);
?>