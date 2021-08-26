<?php
include("./includes/common.php");
if (isset($_SESSION['email'])) {
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include("./includes/header.php");
    ?>

    <section class="mx-auto my-5 w-25 ">
        <div class="primary align-center py-5 border-1 border-dark">
            <div class="form-header">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="body">
                <p class="text-warning text-center">Login to make a purchase</p>
                <form class="form-group" action="login_submit.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="d-block form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="d-block form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary d-block" name="submit"> Submit</button>
                </form>
            </div>
            <div class="form-footer">
                <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
            </div>
        </div>
    </section>

    <?php
    include "./includes/footer.php";
    ?>

</body>

</html>