<?php

include 'connect.php';
include 'sanitize_input.php';

// Get parameter value
$param = cleanInput($_POST['value']);

// Your sql statement
$sql = "SELECT * FROM tbl_user WHERE username = '".$param."'";


?>