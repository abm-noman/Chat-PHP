<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {  // checking empty fields
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'");   // querying data from database table
    if (mysqli_num_rows($sql) > 0) { 
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
        
       } else{
            echo "Invalid Password.";
    }

}else{
    echo  "All fields are required!";
}

?>