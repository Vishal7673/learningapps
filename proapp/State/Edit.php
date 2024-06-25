<?php
include("conn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql="select * from state where State_id='".$id."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    $row=mysqli_fetch_assoc($result);
}
$state_country_id=$row["Country_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Update.php" method="get">
        <input type="hidden" name="id" value="<?php echo $row["State_id"] ?>">
        <label for="">State Name :</label>
        <input type="text" name="Name" value="<?php echo $row["Name"] ?>">
        <label for="">Country Name :</label>
        <select name="Country_name" id="">
            <?php
            $query="select * from country";
            $result_count=mysqli_query($conn,$query);
            if(mysqli_num_rows($result_count) > 0){
                while($row = mysqli_fetch_assoc($result_count)){
                    if($state_country_id==$row["Name"])
                    echo "<option value='".$row["Country_id"]."' selected>".$row["Name"]."</option>";
                    else
                    echo "<option value='".$row["Country_id"]."' >".$row["Name"]."</option>";
                }
            }
            ?>
        </select>
        <button type="submit">Update</button>

    </form>
</body>
</html>