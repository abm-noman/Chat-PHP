<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];  //get user info from session
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");   // querying data from database table
$output = "";     // variable to store the output of the sql query

if (mysqli_num_rows($sql) == 1) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include "data.php";
}
echo $output;

?>
