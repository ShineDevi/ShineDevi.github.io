<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "koneksi.php";

        $id=$_GET['id'];
        $nama=$_GET['name'];
        $harga=$_GET['price'];

        $query="UPDATE product SET product_name='$nama', harga='$harga'
        WHERE id='$id'";
        $result=mysqli_query($connect, $query);

        if ($result) {
            echo "Berhasil update data";
    ?>
        <a href="homeCRUD.php">Lihat data</a>
    <?php
        }
        else{
            echo "Gagal update data".mysqli_error($connect);
        }
    ?>
</body>
</html>