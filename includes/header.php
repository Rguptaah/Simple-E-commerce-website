<header>
    <nav class="navbar navbar-inverse navbar-fixed-top fixed-top  navbar-expand-lg navbar-dark bg-dark w-100">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav ml-0">
                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="cart.php" name="cart"><i class="fa fa-shopping-cart"></i> &nbsp;Cart </a>
                        </li>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="settings.php" name="settings"><i class="fa fa-user"></i> &nbsp;Settings</a>
                        </li>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="logout_script.php" name="logout"> <i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="signup.php" name="signup">
                                <i class="fa fa-user"></i>&nbsp;Sign Up
                            </a>
                        </li>
                        <li class="nav-item p-1">
                            <a class="nav-link" href="login.php" name="login">
                                <i class="fa fa-sign-in"></i>&nbsp; Login
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        </div>
</header>