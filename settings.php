<?php
include("./includes/common.php");
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
if (isset($_SESSION['update'])) {
    $new_password = $_POST['new_pass'];
    $retype_password = $_POST['retype_pass'];
    if ($new_password ===  $retype_password) {
        $u = "Update `users` where id = ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include("./includes/header.php"); ?>
    <section class="my-5 mx-auto w-25">
        <form class="py-5" action="" method="post">
            <h3 class="text-capitalize">change password</h3>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Old Password" id="old-pass" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="New Password" id="new-pass" name="new_pass" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Re-type new password" id="retype-newpass" name="retype_pass" required>
            </div>
            <button type="submit" class="btn btn-primary d-block w-auto" name="update"> Submit</button>
        </form>
        </div>
        </form>

    </section>

    </section>

    <?php include('./includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>