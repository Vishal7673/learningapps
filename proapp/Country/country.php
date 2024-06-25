<?php
include("conn.php");

$sql="select * from country";
$result=mysqli_query($conn,$sql);
$error_msg="";
if(isset($_GET['e']) && $_GET['e']==1)
{
    $error_msg=$_GET['em'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $error_msg;?></h2>
    <table border="1">
        <thead>
            <tr>
                <th>Country ID</th>
                <th>Name</th>
                <th>Country Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(mysqli_num_rows($result)> 0){
                while($row=mysqli_fetch_array($result)){
                    echo "<tr><td>".$row["Country_id"]."</td><td>".$row["Name"]."</td><td>".$row["Country_code"]."</td><td><a href='Edit.php?id=".$row["Country_id"]."'>Edit</a></td></tr>";
                }
               }
            ?>
        </tbody>
    </table>
    <form action="Add_country.php" method="get">
        <button type="submit">ADD</button>
    </form>
</body>
</html>