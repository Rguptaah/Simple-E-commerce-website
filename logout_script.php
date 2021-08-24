<?php
session_start();
include("./includes/common.php");
unset($_SESSION['email']);
unset($_SESSION['pass']);
header("location:login.php");
session_destroy();
