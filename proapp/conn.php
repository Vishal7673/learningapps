<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "country2";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_error()==true){
    echo "Connection Failed".mysqli_connect_error();
}

?>