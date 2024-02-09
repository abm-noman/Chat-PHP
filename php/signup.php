<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // if email is valid
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) { // if email is already exist
            echo "$email - already exist!!";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name']; //getting user uploading image name
                $tmp_name = $_FILES['image']['tmp_name']; //temporary name is used to save file in database

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ['png', 'jpg', 'jpeg', 'svg'];
                if (in_array($img_ext, $extensions) === true) { // if user upload img, ext is matched with any array ext
                    $time = time(); //this will return current time
                    $new_img_name = $time . $img_name;

                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $status = "Active Now"; //once user signed  up it's status will be active by default
                        $random_id = rand(time(), 10000000);

                        // insert all usere data inside table
                        $sq12 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                        VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}' ) ");
                        if ($sq12) { //if these data inserted
                            $sq13 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sq13) > 0) {
                                $row = mysqli_fetch_assoc($sq13);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "Success";
                            } else {
                                echo "Something went wrong";
                            }
                        }
                    } else {
                        echo "Please select an image file - png/jpg/jpeg";
                    }
                } else {
                    echo "Please select an image";
                }
            }
        }
    } else {
        echo "$email - is not a valid email";
    }
} else {
    echo "All input fielda are required";
}
