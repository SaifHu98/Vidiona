<?php
include_once("../../dbh.php");
require './acc.php';
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['user'])) {
$update_field.= "user='".$input['user']."'";
} else if(isset($input['name'])) {
$update_field.= "name='".$input['name']."'";
} else if(isset($input['email'])) {
$update_field.= "email='".$input['email']."'";
} else if(isset($input['dob'])) {
$update_field.= "dob='".$input['dob']."'";
} 
if($update_field && $input['id']) {
$sql_query = $conn->prepare("UPDATE admin SET $update_field WHERE id='" . $input['id'] . "'");
$sql_query->bind_param('s', $update_field);
$sql_query->execute();
$sql_query->close();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}
}
?>
