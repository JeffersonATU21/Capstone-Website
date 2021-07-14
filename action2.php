<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'login');

$input = filter_input_array(INPUT_POST);

$type = mysqli_real_escape_string($connect, $input["Type"]);
$name = mysqli_real_escape_string($connect, $input["Name"]);
$oil_change = mysqli_real_escape_string($connect, $input["Oil_Change"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE vehicles 
 SET Name = '".$name."', 
 Type = '".$type."',
 Oil_Change = '".$oil_change."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM vehicles 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>