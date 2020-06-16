<?php
$server = "localhost";
$server_url = "worawanbydiistudent.store";
$user = "";
$password = "";
$database = "";
$connect = new mysqli($server, $user, $password, $database);
if ($connect->connect_errno) {
  alert_message("Connection timed out for user : ".$user.". error code : ".$connect->errno);
  exit();
}
session_start();
?>
