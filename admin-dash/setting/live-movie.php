<?php
include_once("../../dbh.php");
require './acc.php';
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['name'])) {
$update_field.= "name='".$input['name']."'";
} else if(isset($input['genre'])) {
$update_field.= "genre='".$input['genre']."'";
} else if(isset($input['rdate'])) {
$update_field.= "rdate='".$input['rdate']."'";
} else if(isset($input['decription'])) {
$update_field.= "decription='".$input['decription']."'";
} else if(isset($input['viewers'])) {
    $update_field.= "viewers='".$input['viewers']."'";
    } 
if($update_field && $input['mid']) {
$sql_query = $conn->prepare("UPDATE movies SET $update_field WHERE mid='" . $input['mid'] . "'");
$sql_query->bind_param('s', $update_field);
$sql_query->execute();
$sql_query->close();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
}
}
?>
