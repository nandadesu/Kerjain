<?php
session_start();
require_once("connection.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($productByCode[0]["code"] => array('merk' => $productByCode[0]["merk"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"], 'image' => $productByCode[0]["image"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
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
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/product.css">
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

        <div class="container-fluid mt-2 mb-4">
            <div id="shopping-cart">
                <div class="txt-heading">Shopping Cart</div>

                <a id="btnEmpty" href="product.php?action=empty">Empty Cart</a>
                <?php
                if (isset($_SESSION["cart_item"])) {
                    $total_quantity = 0;
                    $total_price = 0;
                    ?>
                    <table class="tbl-cart" cellpadding="10" cellspacing="1">
                        <tbody>
                            <tr>
                                <th style="text-align:left;">Nama Barang</th>
                                <th style="text-align:left;">Code</th>
                                <th style="text-align:right;" width="5%">Quantity</th>
                                <th style="text-align:right;" width="10%">Unit Price</th>
                                <th style="text-align:right;" width="10%">Price</th>
                                <th style="text-align:center;" width="5%">Remove</th>
                            </tr>
                            <?php
                                foreach ($_SESSION["cart_item"] as $item) {
                                    $item_price = $item["quantity"] * $item["price"];
                                    ?>
                                <tr>
                                    <td><img src="<?php echo $item["image"]; ?>" class="img-thumbnail" style="width: 50px;height:50px;" /><?php echo $item["merk"]; ?></td>
                                    <td><?php echo $item["code"]; ?></td>
                                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                    <td style="text-align:right;"><?php echo "Rp " . $item["price"]; ?></td>
                                    <td style="text-align:right;"><?php echo "Rp " . number_format($item_price, 2); ?></td>
                                    <td style="text-align:center;"><a href="product.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            <?php
                                    $total_quantity += $item["quantity"];
                                    $total_price += ($item["price"] * $item["quantity"]);
                                }
                                ?>

                            <tr>
                                <td colspan="2" align="right">Total:</td>
                                <td align="right"><?php echo $total_quantity; ?></td>
                                <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else {
                    ?>
                    <div class="no-records">Your Cart is Empty</div>
                <?php
                }
                ?>
            </div>


            <div id="product-grid">
                <div class="txt-heading">Products</div>
                <div class="row">
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM products WHERE category = 'interior' AND id > 0 AND id <= 4 ORDER BY id ASC");
                    if (!empty($product_array)) {
                        foreach ($product_array as $key => $value) {
                            ?>
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <form method="post" action="product.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                        <img src="<?php echo $product_array[$key]["image"]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product_array[$key]["merk"]; ?></h5>
                                            <p class="card-text">Starting from Rp.<?php echo "$" . $product_array[$key]["price"]; ?></p>
                                            <div class="cart-action"><input type="number" class="product-quantity" name="quantity" value="1" size="2" /><button type="submit" value="Add to Cart" class="btn btn-success" /></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <br>
                <div class="row">
                    <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM products WHERE category = 'interior' AND id > 4 AND id < 9 ORDER BY id ASC");
                    if (!empty($product_array)) {
                        foreach ($product_array as $key => $value) {
                            ?>
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <form method="post" action="product.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                        <img src="<?php echo $product_array[$key]["image"]; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product_array[$key]["merk"]; ?></h5>
                                            <p class="card-text">Starting from Rp.<?php echo "$" . $product_array[$key]["price"]; ?></p>
                                            <div class="cart-action"><input type="number" class="product-quantity" name="quantity" value="1" size="2" /><button type="submit" value="Add to Cart" class="btn btn-success" /></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
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
    </body>

    </html>