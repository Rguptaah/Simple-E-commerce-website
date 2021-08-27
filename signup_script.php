<?php
include('./includes/common.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];


    // $regex_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // if (!preg_match($regex_email, $email)) {
    //     echo "Incorrect email";
    // }
    $select = " SELECT  * FROM `users` where email ='$email' ";
    $query = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) > 0) {
        echo "Email is already registered";
    } else {
        $qry = " INSERT INTO  `users` ( `username`, `email`, `password`, `contact`, `city`, `address` ) VALUES ('$name','$email','$pass','$contact','$city','$address') ";
        $result = mysqli_query($conn, $qry);
        if ($result == true) {
            $id = mysqli_insert_id($conn);
            $_SESSION['id'] = $id;
            header("location:products.php");
        } else {
            echo "Error Occured";
        }
    }
}
