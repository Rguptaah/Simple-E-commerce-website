<?php
include("./includes/common.php");
if (isset($_SESSION['email'])) {
    header('location:products.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('./includes/header.php'); ?>

    <section class="my-5 mx-auto w-25">
        <form class="py-5" action="signup_script.php" method="post">
            <h1 class="text-uppercase">Sign Up</h1>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name" id="name" name="name" aria-describedby="emailHelp" required patterns="(a-z)(A-z)_">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" id="pass" name="password" required>
            </div>
            <div class="mb-3">
                <input type="phone" class="form-control" placeholder="Contact" id="contact" name="contact" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="City" id="city" name="city" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary d-block w-auto" name="submit">Submit</button>
        </form>
        </div>
        </form>

    </section>

    <?php include('./includes/footer.php'); ?>

</body>

</html>