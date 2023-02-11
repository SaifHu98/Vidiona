<?php
include_once("../../dbh.php");
require './acc.php';
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['username'])) {
$update_field.= "username='".$input['username']."'";
} else if(isset($input['name'])) {
$update_field.= "name='".$input['name']."'";
} else if(isset($input['email'])) {
$update_field.= "email='".$input['email']."'";
} else if(isset($input['DOB'])) {
$update_field.= "DOB='".$input['DOB']."'";
} 
if($update_field && $input['id']) {
$sql_query = $conn->prepare("UPDATE user SET $update_field WHERE id='" . $input['id'] . "'");
$sql_query->bind_param('s', $update_field);
$sql_query->execute();
$sql_query->close();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

}
}
?>
