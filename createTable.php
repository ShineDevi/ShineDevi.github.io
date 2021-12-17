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

        $sql="CREATE TABLE product(
              id INT PRIMARY KEY,
              product_name VARCHAR(30) NOT NULL, 
              harga INT NOT NULL)";
        
        if(mysqli_query($connect, $sql)){
            echo "Table Product berhasil dibuat";
        } else{
            echo "Table Product gagal dibuat <br>".mysqli_connect_error($connect);
        }

        mysqli_close($connect);
    ?>
</body>
</html>