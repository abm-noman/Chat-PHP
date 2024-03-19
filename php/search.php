<?php
    session_start();  // Starting Session

    include_once  'config.php';
    $outgoing_id = $_SESSION['unique_id'];  //get user info from session
    $searchTerm  = mysqli_real_escape_string( $conn, $_POST['searchTerm'] ); // get the search term
    $output = "";  			// store the output of database query

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    if (mysqli_num_rows($sql) > 0) {
        // output data of each row
        include "data.php";
    }else{
        $output .= "No user Found";
    }
    echo $output;
?>