<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'login');

$input = filter_input_array(INPUT_POST);

$type = mysqli_real_escape_string($connect, $input["Type"]);
$location = mysqli_real_escape_string($connect, $input["Location"]);
$cost = mysqli_real_escape_string($connect, $input["Cost"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE jobs 
 SET Type = '".$type."', 
 Location = '".$location."',
 Cost = '".$cost."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM jobs 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>