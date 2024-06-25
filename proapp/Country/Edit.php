<?php
include("conn.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql="select * from country where Country_id='".$id."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    $row=mysqli_fetch_assoc($result);
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
    <form action="Update.php" method="get">
        <input type="hidden" name="id" value="<?php echo $row["Country_id"] ?>">
        <label for="">Name :</label>
        <input type="text" name="Name" value="<?php echo $row["Name"] ?>">
        <label for="">Country Code :</label>
        <input type="text" name="Country_code" value="<?php echo $row["Country_code"] ?>">
        <button type="submit">Update</button>

    </form>
</body>
</html>