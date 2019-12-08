<?php
include "connect_user.php";
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $SQL = "SELECT * FROM users WHERE username = '$username' AND id = '$id'";
    $result = mysqli_query($connect, $SQL);
    $row = mysqli_fetch_assoc($result);
} elseif (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IKIA - Solusi rumah anda</title>

    <!-- CSS / JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/img/logo.png" width="80" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="account.php">Account Information</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                <?php
                } else {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="register.php">Register</a>
                        </div>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <button type="button" class="btn btn-link"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="text-center">Hello, <?php echo $username ?></h1>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <b>Your Email</b> : <?php echo $row["email"] ?> <br>
                <b>Your Address</b> : <?php echo $row["address"] ?> <br>
                <b>Your Total Money</b> : <?php echo $row["money"] ?> <br><br>
                <?php
                if ($row["money"] < 10000) {
                    echo "Your Money is almost empty, with less than 10000 you cant buy anything.";
                }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/abee8333cb.js"></script>
    <script src="./js/hack_like.js"></script>
    <script src="./js/about_script.js"></script>
</body>

</html>