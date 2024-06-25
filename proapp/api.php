<?php 
include("conn.php");

$function_name=$_GET['function_name'];

switch($function_name)
{
    case 'stateListByCountryID':
        
        if(isset($_GET['id']))
        {
        $country_id=$_GET['id'];
        $sql="select * from state2  where Country_id='".$country_id."'";
        $results=mysqli_query($conn,$sql);
        $final_list=array();
        $i=0;
        while($result=mysqli_fetch_assoc($results))
        {
            $final_list[$i] = $result;
            $i++;
        }
        echo json_encode(array("status"=>1,"msg"=> "invalid endpoint","data"=>$final_list));
        }
        else
        {
            echo json_encode(array("status"=>0,"msg"=> "invalid argument"));
        }

    break;
    case "cityListByStateID":
        $state_id=$_GET['id'];
        $sql="select * from state2  where Country_id='".$state_id."'";
        $results=mysqli_query($conn,$sql);
        $final_list=array();
        $i=0;
        while($result=mysqli_fetch_assoc($results))
        {
            $final_list[$i] = $result;
            $i++;
        }
        echo json_encode(array("status"=>1,"msg"=> "invalid endpoint","data"=>$final_list));
    break;
    default:
    echo json_encode(array("status"=>0,"msg"=> "invalid endpoint"));
}
?>