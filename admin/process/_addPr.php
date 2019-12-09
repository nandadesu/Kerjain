<?php
    include "../connect_user.php";

    $merk = $_POST['merk'];
    $des = $_POST['deskripsi'];
    $code = $_POST['code'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $categ = $_POST['category'];
    // $pic = $_POST['pict'];
    $pic = "test";

    $sql="INSERT INTO products (merk, description, code, price, stock, category, image)
            VALUE ('$merk', '$des', '$code', '$price', '$stock', '$categ', '$pic')";

        if (mysqli_query($connect, $sql)){
            header("location:crud_product.php");
        }else{
            echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
        }
        mysqli_close($connect);