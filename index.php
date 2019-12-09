<?php
include "connect_user.php";
session_start();
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
                <li class="nav-item active">
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

    <div class="bd-example h-50 w-100 mb-5 mt-1">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="5000">
                    <img src="./assets/img/slide1.jpg" class="w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="./assets/img/slide2.jpg" class="w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="./assets/img/slide3.jpg" class="w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/product-range.webp" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption text-center" style="font-size:18pt; font-weight:900">Family room</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/fbox3.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption text-center" style="font-size:18pt; font-weight:900">Modern living room</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/box2.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <figcaption class="figure-caption text-center" style="font-size:18pt; font-weight:900">Cozy room</figcaption>
                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h2 class="text-center" style="font-weight:900; font-family:Helvetica;">Get a inspiration!</h2>
        </div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-10">
            <p class="text-center" style=" font-family:Helvetica;font-size:14pt">
                We don't believe in perfect homes. We believe in homes that are a perfect reflection of the people who live inside.
            </p>
        </div>
        <div class="col"></div>
    </div><br>

    <div class="container-fluid rounded bg-light mb-3 shadow-sm" style="width: 98%;">
        <div class="row">
            <div class="col-8">
                <img src="./assets/img/bigbox.jpg" class="img-fluid rounded m-2" style="width: 95%" alt="">
            </div>
            <div class="col-4">
                <div class="row">
                    <h2 style="font-weight:600;">Featured Inspiration</h2>
                </div>
                <hr>
                <div class="row">
                    <figure class="figure">
                        <img src="./assets/img/box.jpg" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-xs-right text-center"><b>Holiday ideas</b></figcaption>
                    </figure>
                </div>
                <div class="row">
                    <figure class="figure">
                        <img src="./assets/img/box4.jpg" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-xs-right text-center"><b>Modern room</b></figcaption>
                    </figure>
                </div>
                <div class="row">
                    <figure class="figure">
                        <img src="./assets/img/fbox2.jpg" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-xs-right text-center"><b>lazy day</b></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h2 class="text-center">Shop by Category</h2>
        </div>
        <div class="col"></div>
    </div><br>
    <div class="container-fluid mt-2 mb-3">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p1.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>KLIPPAN</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 800.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p2.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>VIMLE</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 1.500.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p3.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>KIVIK</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 1.870.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p4.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>LUNSTER</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 940.000</h4>
                    </figcaption>
                </figure>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p5.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>KASTED</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 890.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p6.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>LITTER</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 789.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p7.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>BUDSY</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 2.040.000</h4>
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="./assets/img/products/p8.jpg" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h2>RODDY</h2>
                    </figcaption>
                    <figcaption class="figure-caption text-xs-right text-left">
                        <h4>Rp 1.240.000</h4>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div><br><br>

    <footer id="footer-Section">
        <div class="footer-top-layout">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-col-item">
                            <h4>Address</h4>
                            <address>
                                Gedung Sipil Lt 5 - 7 <br>
                                Politeknik Negeri Malang
                            </address>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-col-item">
                            <h4>Contact Us</h4>
                            <div class="item-contact">
                                <a href="tel:630-885-9200"><span class="link-id">Phone</span>:<span>+628-1234-5678-910</span>
                                    <a href="mailto:info@brandcatmedia.com"><span class="link-id">E-Mail</span>:<span>support@ikia.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-col-item">
                            <h4>Subscribe</h4>
                            <form class="signUpNewsletter" action="" method="get">
                                <input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
                                <input name="" class="btn-go" value="Go" type="button">
                            </form>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="socialMedia-footer">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="copyright-tag">Copyright © 2019. All Rights Reserved.</div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/abee8333cb.js"></script>
</body>

</html>