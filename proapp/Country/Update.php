<?php
include("conn.php");
$id=$_GET["id"];
$Name=$_GET["Name"];
$Country_code=$_GET["Country_code"];
$sql="update country set Name='".$Name."',Country_code='".$Country_code."' where Country_id='".$id."'";
mysqli_query($conn,$sql);
header("location:country.php");
mysqli_close($conn);
?>