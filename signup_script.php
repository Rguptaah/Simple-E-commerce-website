<?php
require('./includes/common.php');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$address = mysqli_real_escape_string($conn, $_POST['address']);


// $regex_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
// if (!preg_match($regex_email, $email)) {
//     echo "Incorrect email";
// }

$sql = ' INSERT INTO  `users` ( `username`, `email`, `password`, `contact`, `city`, `address` ) VALUES ("$name","$email","$pass","$contact","$city","$address") ';
$result = $conn->query($sql);
if ($result == true) {
    echo "Successfully Inserted.";
} else {
    echo "Error Occured";
}
