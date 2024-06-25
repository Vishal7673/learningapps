<?php
include("conn.php");
$sql="select * from country2";
$result=mysqli_query($conn,$sql);
$query="select * from state2";
$state_result=mysqli_query($conn,$query);
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
        <label for="">City Name :</label>
        <input type="text" name="City_name" >
        <label for="">Country Name :</label>
        <select name="Country_name" id="country_id" onchange="getStateList()">
            <?php
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row["Country_id"]."'>".$row["Country_name"]."</option>";
                }
            }
            ?>
        </select>
        <label for="">State Name :</label>
        <select name="State_name" id="State_name">
        <option>Select State</option>
        </select>
       
       
        <button type="submit">Add</button>

    </form>
    <script>
        function getStateList()
        {
            country_id=document.getElementById('country_id').value;
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let data=JSON.parse(this.responseText);
                let state_list="<option>Select State</option>";
                for(i=0;i<data.data.length;i++)
                {
                    state_list+="<option value='"+data.data[i].State_id+"'>"+data.data[i].State_name+"</option>"
                }
                document.getElementById('State_name').innerHTML=state_list;
            }
            xhttp.open("GET", "http://localhost/proapp/api.php?id="+country_id+"&function_name=stateListByCountryID" );
            xhttp.send();
        }
    </script>
</body>
</html>