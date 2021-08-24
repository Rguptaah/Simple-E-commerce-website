<?php
include("./includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <section class="my-5">
        <div class="container py-5">
            <div class=" bg-secondary p-4 mb-2">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
                    around, we have all in one place.</p>
            </div>
            <div class="row mt-3 g-3 text-center">
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/1.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Cannon EOS</h3>
                    <p>Price Rs.36000</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/2.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Sony DSLR</h3>
                    <p>Price Rs.40000</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/3.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Sony DSLR</h3>
                    <p>Price Rs.60000</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/4.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Olympus DSLR</h3>
                    <p>Price Rs.80000</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/5.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Titan Model #301</h3>
                    <p>Price Rs.13000.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/6.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Titan Model #201</h3>
                    <p>Price Rs.3000.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/7.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>HMT Milan</h3>
                    <p>Price Rs.8000.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/8.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Faber Luba #111</h3>
                    <p>Price Rs.18000.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/9.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>H&W</h3>
                    <p>Price Rs.800.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/10.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Luis Phil</h3>
                    <p>Price Rs.1000.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/11.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>John Zok</h3>
                    <p>Price Rs.1500.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
                <div class="col-md-3 col-sm-6 bg-white p-1" style="border:1px solid #f2f2f2;border-bottom:0">
                    <img src="../assets/Gallery/12.jpg" alt="camera" class="img-fluid card-img img-size">
                    <h3>Jhalsani</h3>
                    <p>Price Rs.1300.00</p>
                    <button class="btn btn-primary w-100">Add to cart</button>
                </div>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php"); ?>
</body>

</html>