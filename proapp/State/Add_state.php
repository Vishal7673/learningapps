<?php
include("conn.php");
$sql="select * from country";
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
<form action="Add.php" method="get">
        <label for="">State Name :</label>
        <input type="text" name="Name" >
        <label for="">Country Name :</label>
        <select name="Country_name" id="">
            <?php
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row["Name"]."'>".$row["Name"]."</option>";
                }
            }
            ?>
        </select>
        <button type="submit">Add</button>

    </form>
</body>
</html>