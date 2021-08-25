<?php
include('./includes/common.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];


    // $regex_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // if (!preg_match($regex_email, $email)) {
    //     echo "Incorrect email";
    // }

    $qry = " INSERT INTO  `users` ( `username`, `email`, `password`, `contact`, `city`, `address` ) VALUES ('$name','$email','$pass','$contact','$city','$address') ";
    $result = mysqli_query($conn, $qry);
    if ($result == true) {
        // echo "Successfully Inserted.";
        header("location:login.php");
    } else {
        echo "Error Occured";
    }
}
