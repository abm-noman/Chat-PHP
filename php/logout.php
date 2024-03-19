<?php 
    session_start();
    if (isset($_SESSION['unique_id'])) {   // if user is already logged in
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET["logout_id"]);
        if (isset($logout_id)) {
            $status = "Offline";
            $sql = mysqli_query($conn, "UPDATE users SET status ='{$status}' WHERE unique_id =  '{$logout_id}'");
            if ($sql) {
                session_unset() ;          // unset SESSION data
                session_destroy(  );       // destroy the session
                header("Location: ../login.php");     // redirect to login page
                }
        }else{
            header("Location: ../users.php");
        }
    }else{
        header("Location: ../login.php");
    }
?>