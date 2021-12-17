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
        $hostname="localhost";
        $username="root";
        $password="";
        $database="prakwebdb";
        $connect=mysqli_connect($hostname, $username, $password, $database);

        if($connect){
            echo "Koneksi ke MySQL berhasil <br>";
        } else{
            echo "Koneksi ke MySQL gagal <br>".mysqli_connect_error();
        }

        $sql="INSERT INTO product(id, product_name,harga)
              VALUES(2,'Buku',2000),(3,'Penggaris', 3000),(4,'Ballpoint',2500)";
        
        if(mysqli_query($connect, $sql)){
            echo "Data berhasil ditambahkan";
        } else{
            echo "Data gagal ditambahkan <br>".mysqli_connect_error($connect);
        }

        mysqli_close($connect);
    ?>
</body>
</html>