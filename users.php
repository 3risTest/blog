<?php

include_once('resources/init.php');

$user = $_POST['user'];
$pass = $_POST['pass'];
mysqli_query("SELECT id FROM users WHERE username = '$user' and passcode = '$pass'");

?>
