<?php
session_start();
include 'Config/ConnectionObjectOriented.php';
include 'Config/DB.php';
$db=new DB($conn);
function validateReData($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>