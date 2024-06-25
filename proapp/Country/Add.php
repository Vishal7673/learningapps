<?php
include("conn.php");
$Name=$_GET["Name"];
$Country_code=$_GET["Country_code"];
$sql_check_exists="select Name from country where Name='".$Name."'";
$result_exists=mysqli_query($conn,$sql_check_exists);
if(mysqli_num_rows($result_exists)>0)
{
header("location:country.php?e=1&em=Country exists");
exit;
}
$sql="insert into country(Name,Country_code) values ('".$Name."','".$Country_code."')";
mysqli_query($conn,$sql);
header("location:country.php");
mysqli_close($conn);
?>