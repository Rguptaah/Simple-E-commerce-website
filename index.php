<?php
include("./includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location:signup_script.php ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeStyle Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    include("./includes/header.php");
    ?>

    <div id="banner_image">
        <div class="container">
            <div class="banner_content">
                <a href="products.php" name="shop" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>

    <?php
    include("./includes/footer.php");
    ?>


</body>

</html>