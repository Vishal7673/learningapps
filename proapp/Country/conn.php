<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "country";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_error()==true){
    echo "Connection Failed".mysqli_connect_error();
}

?>