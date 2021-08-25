<?php
include("./includes/common.php");
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include("./includes/header.php"); ?>

    <section class="" style="margin:10% 0">
        <table class="table table-bordered  mx-auto w-50">
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td>Rs.0/-</td>
                <td><a href="success.html" class="btn btn-primary">Confirm order</a></td>
            </tr>
        </table>
    </section>


    <?php include("./includes/footer.php"); ?>
</body>

</html>