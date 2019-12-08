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
                if (isset($_SESSION['username']) > 0) {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="account.php">Account Information</a>
                            <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#regModal">Register</a>
                        </div>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <button type="button" class="btn btn-link" href="checkout.php"><i class="fas fa-shopping-cart"></i></button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1 class="text-center">
                Meet our Team
            </h1>
            <p class="lead text-center">
                People behind this project
            </p>
        </div>
        <div class="col"></div>
    </div>

    <div class="container-fluid mb-3 mt-3">
        <div class="about__section">
            <!-- Specificity container -->
            <a href="javascript:void(0);" title="Harbor Neher - Account Manager">
                <div class="about__slot">
                    <div class="headshot" onclick="biograph(this.parentNode);" style="background-image:url('http://placekitten.com/326/326');"></div>

                    <div class="about__info">
                        <h4 class="name">Gusti Ananda</h4>
                        <h5 class="title">Designer</h5>
                    </div>
                    <div class="bioText">Harbor Neher is a lorem ipsum dalor set amet consectur adipscing.<br><br>f g+ tw li</div>

                </div>
            </a><a href="javascript:void(0);" title="Sarah Spoja - Staff Writer">
                <div class="about__slot">
                    <div class="headshot" onclick="biograph(this.parentNode);" style="background-image:url('http://placekitten.com/284/284');"></div>
                    <div class="about__info">
                        <h4 class="name" style="font-family: 'Beth Ellen', cursive;">Unero</h4>
                        <h5 class="title">Full Stack Dev</h5>
                    </div>
                    <div class="bioText">Sarah Spoja is a lorem ipsum dalor set amet consectur adipscing.<br><br>f g+ tw li</div>


                </div>
            </a><a href="javascript:void(0);" title="Malik Ali - Account Manager">
                <div class="about__slot">
                    <div class="headshot" onclick="biograph(this.parentNode);" style="background-image:url('http://placekitten.com/294/294');"></div>
                    <div class="about__info">
                        <h4 class="name">Subhan Indra</h4>
                        <h5 class="title">Journalist</h5>
                    </div>
                    <div class="bioText">Malik Ali is a lorem ipsum dalor set amet consectur adipscing.<br><br>f g+ tw li</div>

                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1 class="text-center">
                Technology we are used
            </h1>
            <p class="lead text-center">
                Hammer, Cutter, Pencil ?
            </p>
        </div>
        <div class="col"></div>
    </div>
    <div class="container-fluid mb-1">
        <h3 class="text-center">Frontend</h3>

        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <figure class="figure" style="margin-left: 30%;">
                    <img src="https://cdn.worldvectorlogo.com/logos/bootstrap-4.svg" style="width: 70px; height: 70px;" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-center">Bootstrap 4</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure class="figure" style="margin-left: 30%;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" style="width: 70px; height: 70px;" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-center">HTML</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure class="figure" style="margin-left: 30%;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" style="width: 70px; height: 70px;" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-center">CSS</figcaption>
                </figure>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <div class="container-fluid mb-3 mt-1">
        <h3 class="text-center">Backend</h3>
        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <figure class="figure" style="margin-left: 30%;">
                    <img src="https://2ality.com/2011/10/logo-js/js.jpg" style="width: 70px; height: 70px;" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-center">JavaScript</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure class="figure" style="margin-left: 30%;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png" style="width: 100px; height: 70px;" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption text-center">PHP</figcaption>
                </figure>
            </div>
            <div class="col"></div>
        </div>
    </div>

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

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="account.php" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                            </div>
                            <input type="text" name="username" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                            </div>
                            <input type="password" name="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="regModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="account.php" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            </div>
                            <input type="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                            </div>
                            <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Re-Password</span>
                            </div>
                            <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" value="Reset">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="account.php" method="post">
                        <p class="lead">
                            Are you sure to Logout Account ?
                        </p>
                        <input name="logout">
                        <button type="button" class="btn btn-success">Yes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    </form>
                </div>
            </div>
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