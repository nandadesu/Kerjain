<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>IKIA - Solusi rumah anda</title>

        <!-- CSS / JS -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="../assets/img/logo.png" width="80" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="crud_user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="crud_product.php">Product</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./process/_logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav><br><br><br>
    <div class="container">
        <table id="myTable" class=" table order-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Deskripsi Product</th>
                    <th>Code</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "../connect_user.php";

                $query="SELECT * FROM products ORDER BY id";
                $result=mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["merk"]?></td>
                            <td><?php echo $row["description"] ?></td>
                            <td><?php echo $row["code"]?></td>
                            <td><?php echo $row["price"]?></td>
                            <td><?php echo $row["stock"]?></td>
                            <td><?php echo $row["category"]?></td>
                            <td><img src="../<?php echo $row["image"] ?>" style="width:50px;height:50px;"></td>
                            <td>
                                <a href="editForm.php?id=<?php echo $row['id']; ?> ">
                                Edit</a>
                                <a href="./process/_hapusPr.php?id=<?php echo $row['id']; ?> ">
                                Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "0 results";
                }
                ?>
                <tr>
                    <form action="./process/_addPr.php" method="post">
                        <td></td>
                        <td>
                            <select id="inputState" class="form-control" name="merk">
                                <option selected>Choose...</option>
                                <option>INFORMA</option>
                                <option>ACE</option>
                                <option>OLYMPIC</option>
                            </select>
                        </td>
                        <td>
                            <input type="mail" name="deskripsi"  class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="code"  class="form-control"/>
                        </td>
                        <td>
                            <input type="number" name="price"  class="form-control"/>
                        </td>
                        <td>
                            <input type="number" name="stock" class="form-control" />
                        </td>
                        <td>
                            <select id="inputState" class="form-control" name="category">
                                <option selected>Choose...</option>
                                <option>Interior</option>
                                <option>Exterior</option>
                            </select>
                        </td>
                        <td>       
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="pict">
                        </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9">
                        <input type="submit" class="btn btn-primary btn-block " id="addrow" value="➕ Row" />
                    </td>
                    </form>
                </tr>
                <tr>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/abee8333cb.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    </body>
</html>