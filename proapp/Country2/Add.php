<?php
include("conn.php");
$Country_name=$_GET["Country_name"];
$Country_code=$_GET["Country_code"];
$sql_check_exists="select Country_name from country2 where Country_name='".$Country_name."'";
$result_exists=mysqli_query($conn,$sql_check_exists);
if(mysqli_num_rows($result_exists)>0)
{
header("location:country.php?e=1&em=Country exists");
exit;
}
$sql="insert into country2(Country_name,Country_code) values ('".$Country_name."','".$Country_code."')";
mysqli_query($conn,$sql);
header("location:country.php");
mysqli_close($conn);
?>