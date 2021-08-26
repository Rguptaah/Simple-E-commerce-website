<?php
include("./includes/common.php");
if (isset($_POST['submit'])) {
    $email =  $_POST['email'];
    $pass =  md5($_POST['password']);
    $sql =   " SELECT  * from `users` where  email = '$email'  AND  password ='$pass' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "There is no any user registered with this email";
    } else {
        $row = mysqli_fetch_array($result);
        $name = $row['username'];
        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($conn);
        header('location:products.php');
    }
}

// 