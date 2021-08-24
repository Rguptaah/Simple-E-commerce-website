<?php
require("./includes/common.php");
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
md5($pass);
$sql =   ' SELECT  * from `users` where email = ".$email." and  password =". $pass ."';
$result = $conn->query($sql);
if (mysqli_num_rows($result) == 0) {
    echo "There is no any user registered with this email";
} else {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location:products.php');
}
