<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect($server, $username, $password, $db) or die(mysqli_error($conn));
session_start();
