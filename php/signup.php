<?php
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // if email is valid
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ // if email is already exist
                echo "$email - already exist!!";
            }else{
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name']; //getting user uploading image name
                    $img_type = $_FILES['image']['type']; //getting user uploading image type
                    $tmp_name = $_FILES['image']['tmp_name']; //temporary name is used to save file in database

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg', 'svg'];
                    if (in_array($img_ext, $img_ext)) {
                        # code...
                    }

                }else {
                    echo "Please select an image";
                }
            }
        }else{
            echo "$email - is not a valid email";
        }
    }else{
        echo "All input fielda are required";
    }
?>