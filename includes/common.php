<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "store";

$conn = mysqli_connect($server, $username, $password, $db) or die(mysqli_error($conn));
session_start();
