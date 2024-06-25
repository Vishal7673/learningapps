<?php
include("conn.php");
$sql="select * from state";
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Country ID</th>
                <th>Name</th>
                <th>Country Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(mysqli_num_rows($result)> 0){
                while($row=mysqli_fetch_array($result)){
                    echo "<tr><td>".$row["State_id"]."</td><td>".$row["Name"]."</td><td>".$row["Country_name"]."</td><td><a href='Edit.php?id=".$row["State_id"]."'>Edit</a></td></tr>";
                }
               }
            ?>
        </tbody>
    </table>
    <form action="Add_state.php" method="get">
        <button type="submit">ADD</button>
    </form>
</body>
</html>